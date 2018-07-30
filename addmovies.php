
<?php session_start(); ?> 


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>Add movie</title>

    <script>
       function validateMovieForm(){
          var name=addMovieForm.Name;
          var year=addMovieForm.Year;
          var lan=addMovieForm.lang;
          var duration=addMovieForm.dur;
          var genre=addMovieForm.genre;
          var director=addMovieForm.director;
          var stars=addMovieForm.stars;
          var summary=addMovieForm.summ;

          if(name.value=="")
          {
            window.alert("Please enter movie name .");
            firstname.focus();
            return false;
          }

          if(lan.value=="")
          {
            window.alert("Please enter movie Language .");
            firstname.focus();
            return false;
          }
          if(duration.value=="")
          {
            window.alert("Please enter movie Duration .");
            firstname.focus();
            return false;
          }
            if(genre.value=="")
          {
            window.alert("Please enter movie Gunres .");
            firstname.focus();
            return false;
          }
           if(director.value=="")
          {
            window.alert("Please enter name of the Director .");
            firstname.focus();
            return false;
          }
           if(stars.value=="")
          {
            window.alert("Please enter movie stars .");
            firstname.focus();
            return false;
          }
           if(summary.value=="")
          {
            window.alert("Please Add movie summary .");
            firstname.focus();
            return false;
          } 
          return true;


       }

    </script>

     </head>

  <body>
       <?php include 'admin_navbar.html';  ?>

          <div class="container">
          <div class="row">
          <div class="page-header">
          <h1>Add Movie</h1>
          </div>
          <form class="form-horizontal" role="form" method="post" action="movieSubmit.php" name="addMovieForm" onsubmit="return validateMovieForm();">
           
              <div class="form-group">
              <label for="Name" class="col-sm-2 control-label">Movie Name:</label>
              <div class="col-sm-6">
              <input type="text" name="Name" class="form-control" id="Name" placeholder="Name">
              </div>
              </div>
           
              <div class="form-group">
              <label for="Year" class="col-sm-2 control-label">Year:</label>
              <div class="col-sm-6">
              <input type="year" name="Year" class="form-control" id="Year" placeholder="Year">
              </div>
              </div>

              <div class="form-group">
              <label for="lang" class="col-sm-2 control-label">Language:</label>
              <div class="col-sm-6">
              <input type="text" name="lang" class="form-control" id="lang" placeholder="Language">
              </div>
              </div>
               
              
               
              <div class="form-group">
              <label for="dur" class="col-sm-2 control-label">Duration:</label>
              <div class="col-sm-6">
              <input type="text" name="dur" class="form-control" id="dur" placeholder="Duration">
              </div>
              </div>

              <div class="form-group">
              <label for="genre" class="col-sm-2 control-label">Genre:</label>
              <div class="col-sm-6">
              <input type="text" name="genre" class="form-control" id="genre" placeholder="Genre">
              </div>
              </div>
               
              <div class="form-group">
              <label for="director" class="col-sm-2 control-label">Director:</label>
              <div class="col-sm-6">
              <input type="text" name="director" class="form-control" id="director" placeholder="Director">
              </div>
              </div>
               
              <div class="form-group">
              <label for="stars" class="col-sm-2 control-label">Stars:</label>
              <div class="col-sm-6">
              <input type="text" name="stars" class="form-control" id="stars" placeholder="Stars">
              </div>
              </div>

              <div class="form-group">
              <label for="summ" class="col-sm-2 control-label">Summary:</label>
              <div class="col-sm-6">
              <input type="text" name="summ" class="form-control" id="summ" placeholder="Summary">
              </div>
              </div>

                       
              <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-primary" id="register">Save</button>
              </div>
              </div>
           
          </form>
           
          </div><!-- end for class "row" -->
          </div><!-- end for class "container" -->
             <footer>
       
       <div class="container">
     
  <h4 style="text-align: center; background-color: lightgrey; width: 100%;"> &copy; MD. Obaidullah Al-Faruk</h4>
       </div>
   </footer>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      </body>
</html>