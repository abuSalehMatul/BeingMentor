

<html>
<head>
  <meta charset="utf-8">
  <title>Being Mentor Video Room</title>
  <meta name="description" content="being mentor video room">
  <meta name="author" content="being mentor">
  
</head>

<body>
<script> 
  var vidyoConnctorOb;
  function onVidyoClientLoaded(status){
     // console.log(status);
      VC.CreateVidyoConnector({
          viewId: "render",
          viewStyle: "VIDYO_CONNECTORVIEWSTYLE_Default",
          remoteParticipants: {{$participants}},
          logFileFilter: "error",
          logFileName: "",
          userData: ""
      }).then(function(vc){
          vidyoConnctorOb = vc;
      }).catch(function(error){
          console.log(error);
      });

  }

  function joinCall(){
      vidyoConnctorOb.Connect({
          host: "prod.vidyo.io",
          token: "{{$token}}",
          displayName: "{{$myName}}",
          resourceId: "{{$room}}",
          onSuccess: function(){

          },
          onFailure: function(reason){

          },
          onDisconnected: function(reason){

          }
      })
  }
  </script>
<script src="https://static.vidyo.io/latest/javascript/VidyoClient/VidyoClient.js?onload=onVidyoClientLoaded"></script>
  <div id="render" style="width:70%;float:left">
  </div>
  <div style="float:right;">
      <button style="font-size: 50px;margin: 10px;color: white;padding: 20px;background: green;" onclick="joinCall()"> Join Call </button>
  </div>
  
</body>
</html>