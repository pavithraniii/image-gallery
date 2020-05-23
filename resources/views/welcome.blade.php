
<!-- /////// card body - start /////// -->
<html>

 <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>selling</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>

        <style>
           . {
  margin: 0px;
  padding: 0px;
  border-radius: 10px;
}

.card-image img {
  box-shadow: 1px 1px 10px grey;
  height: 180px ;
  width: 100%;
  border-top-right-radius: 10px;
  border-top-left-radius:  10px;
}

.card-title {
  margin-bottom: 0px ;
  padding: 5px;
}

.card-title h1 {
  font-weight: 100;
  font-family: title;
  font-size: 35px;
  text-align: center;
  padding: 0px;
  padding-bottom: 0px;
  margin-bottom: 0px ;
  color: green ;
}

.card-des {
  padding: 3px;
  text-align: center;
  border-bottom-right-radius: 5px;
  border-bottom-left-radius: 5px;
}

.date-up {
  font-size: 13px;
  margin: 8px ;
  font-weight: bold;
}

.date-down {
  font-size: 10px;
  margin-bottom: 3px ;
  margin-top: 0px ;
  font-weight: bold;
}

.card-time-cell {
  font-size: 13px;
  width: 20%;
  display: inline-block;
  box-shadow: 1px 1px 10px green;
  border-radius: 20px;
  font-family: arial;
  padding-top: 5px ;
  margin: 3px;
  margin-bottom: 5px ;
}

.card-time-cell-box {
  width: 100%;
  display: inline-block;
  box-shadow: 1px 1px 10px grey;
  border-radius: 20px;
  font-family: Arial, Helvetica, sans-serif ;
  font-weight: bold;
  padding-top: 1px ;
  padding-bottom: 1px ;
}

.card-time-cell-box p {
  font-size: 30px;
  color: rgba(52, 179, 48) ;
  font-family: digital ;
}

.card-done-cell {
  font-size: 13px;
  width: 60%;
  display: inline-block;
  box-shadow: 1px 1px 10px rgb(128, 0, 0);
  border-radius: 20px;
  font-family: arial;
  padding-top: 5px ;
  margin: 3px;
  margin-bottom: 5px ;
}

.card-done-cell-box {
  width: 100%;
  display: inline-block;
  border-radius: 20px;
  font-family: Arial, Helvetica, sans-serif ;
  font-weight: bold;
  padding-top: 1px ;
  padding-bottom: 1px ;
}

.card-done-cell-box p {
  font-size: 30px;
  color: rgb(228, 58, 58) ;
  font-family: cursive ;
}
        </style>
    </head>

    <body>
        
    
<div class="card">

  <div class="card-image">
      <img src="20190103_132716.jpg">
  </div>

  <div class="card-title">
      <h1>vehile</h1>
  </div>

  <div class="card-des">
    by <br>
    <p>aaaaa</p>
    <div class="date-up" ><p> bbbbbbb </p></div>
    <div *ngIf="eventDone; then IfDone; else IfPending" > </div>
  </div>

</div>

<!-- /////// card body - end /////// -->



   <!-- /////// this tempalete works for ended events , instead of time countdown /////// -->

    <div class="card-done-cell" > <p>event</p>
      <div class="card-done-cell-box">
         <p>ENDED</p>
      </div>
    </div>
    <p class="date-down" > &nbsp; </p>


   <!-- /////// this tempalete works for pending events time countdown /////// -->

    <div class="card-time-cell" > <p>Days <br> </p>
      <div class="card-time-cell-box">
         <p>xxxxxxx</p>
      </div>
    </div>

    <div class="card-time-cell" > <p>Hrs</p>
      <div class="card-time-cell-box">
        <p>xxxxxxxxx</p>
      </div>
    </div>

    <div class="card-time-cell" > <p>Mins</p>
      <div class="card-time-cell-box">
        <p>xxxxxxx</p>
      </div>
    </div>

    <div class="card-time-cell" > <p>Sec</p>
      <div class="card-time-cell-box">
        <p>xxxxx</p>
      </div>
    </div>
    <p class="date-down" >Remaining</p>
    </body>
	</html>


