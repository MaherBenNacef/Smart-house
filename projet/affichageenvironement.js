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
    var rootref = firebase.database().ref().child('mpi');

    rootref.on('value', function(snapshot){

      $('#Humidité').val(snapshot.child('humidity').val());
      $('#Température').val(snapshot.child('temp').val());
      $('#Distance').val(snapshot.child('ultrason').val());

    }); 
  });
});