<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PayPal\Api\Item;
use PayPal\Api\Payer;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Payment;
use PayPal\Api\ItemList;
use PayPal\Api\WebProfile;
use PayPal\Api\InputFields;
use PayPal\Api\Transaction;
use PayPal\Api\RedirectUrls;
use PayPal\Api\PaymentExecution;

use Exception;

use App\Model\UserPackage;
use App\Model\Package;

class PaypalController extends Controller
{
    public function create()
    {
        $userPackage =  UserPackage::where('user_id', auth()->id())
        ->latest('created_at')->first();
        $package = Package::findOrFail($userPackage->package_id);

        $apiContext = new \PayPal\Rest\ApiContext(
            new \PayPal\Auth\OAuthTokenCredential(
                'AQ9EoAXp8okP7HcD1PC7LSNYnCe2amuHj-Fog8VEEqD4IjuseTjiVlNoCOnzM7s29Ad5ITLbSo5eJ7nX',     // ClientID
                'EKExCau0sp7gIvggcdtDdsdzViIU6QcU6yWdXGsq21dhYstAn_eqQ7Kg8tPqqhwTfZQFStHcsIrxilUo'      // ClientSecret
            )
        );
    
        $payer = new Payer();
        $payer->setPaymentMethod("paypal");
        $item1 = new Item();
        $item1->setName($package->name)
            ->setCurrency('USD')
            ->setQuantity(1)
            ->setSku($userPackage->id) // Similar to `item_number` in Classic API
            ->setPrice($package->price);
        // $item2 = new Item();
        // $item2->setName('Granola bars')
        //     ->setCurrency('USD')
        //     ->setQuantity(5)
        //     ->setSku("321321") // Similar to `item_number` in Classic API
        //     ->setPrice(2);
    
        $itemList = new ItemList();
        $itemList->setItems(array($item1));
        $details = new Details();
        $details->setShipping(0)
            ->setTax(0)
            ->setSubtotal($package->price);
    
        $amount = new Amount();
        $amount->setCurrency("USD")
            ->setTotal($package->price)
            ->setDetails($details);
    
        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($itemList)
            ->setDescription("Payment description")
            ->setInvoiceNumber(uniqid());
    
        $redirectUrls = new RedirectUrls();
        $baseUrl = url('/');
        $redirectUrls->setReturnUrl("$baseUrl")
            ->setCancelUrl("$baseUrl");
    
        // Add NO SHIPPING OPTION
        $inputFields = new InputFields();
        $inputFields->setNoShipping(1);
        $webProfile = new WebProfile();
        $webProfile->setName('test' . uniqid())->setInputFields($inputFields);
    
        $webProfileId = $webProfile->create($apiContext)->getId();
    
        $payment = new Payment();
        $payment->setExperienceProfileId($webProfileId); // no shipping
        $payment->setIntent("sale")
            ->setPayer($payer)
            ->setRedirectUrls($redirectUrls)
            ->setTransactions(array($transaction));
    
        try {
            $payment->create($apiContext);
        } catch ( \PayPal\Exception\PayPalConnectionException $ex) {
            echo $ex;
            exit(1);
        }
    
        return $payment;    
    }

    public function execute(Request $request)
    {
        $userPackage =  UserPackage::where('user_id', auth()->id())
        ->latest('created_at')->first();
        $userPackage->is_active = 1;
        $userPackage->save();



        $apiContext = new \PayPal\Rest\ApiContext(
            new \PayPal\Auth\OAuthTokenCredential(
                env('paypalClient'),     // ClientID
                env('paypalSecrect')      // ClientSecret
            )
        );
    
        $paymentId = $request->paymentID;
        $payment = Payment::get($paymentId, $apiContext);
    
        $execution = new PaymentExecution();
        $execution->setPayerId($request->payerID);
    
        // $transaction = new Transaction();
        // $amount = new Amount();
        // $details = new Details();
    
        // $details->setShipping(2.2)
        //     ->setTax(1.3)
        //     ->setSubtotal(17.50);
    
        // $amount->setCurrency('USD');
        // $amount->setTotal(21);
        // $amount->setDetails($details);
        // $transaction->setAmount($amount);
    
        // $execution->addTransaction($transaction);
    
        try {
            $result = $payment->execute($execution, $apiContext);
        } catch (Exception $ex) {
            echo $ex;
            exit(1);
        }
    
        return $result;
    }
}
