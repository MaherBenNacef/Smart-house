var config = {
  apiKey: "AIzaSyCMJKxXrPnzNTx-GRcdnXfQl5820nDYDGA",
  authDomain: "robot-1757e.firebaseapp.com",
  databaseURL: "https://robot-1757e.firebaseio.com",
  projectId: "robot-1757e",
  storageBucket: "gs://robot-1757e.appspot.com",
  messagingSenderId: "79530690787"
};
firebase.initializeApp(config);

$(document).ready(function(){
  var database = firebase.database();


  $('#afficher').click(function(){
    var rootref = firebase.database().ref().child('rpi');

    rootref.on('value', function(snapshot){

      $('#cpu').val(snapshot.child('CPU_temp').val());
      $('#voltage').val(snapshot.child('voltage_core').val());
      $('#memory').val(snapshot.child('ARM_memory').val());

    }); 
  });
});