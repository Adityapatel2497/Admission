<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Admin Area | Dashboard</title>
      <!-- Bootstrap core CSS -->
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet">
      <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
   </head>
   <body>
      <!-- Almost Common for Every Page -->
      <?php include'adminMenu.php' ?>
      <header id="header">
         <div class="container">
            <div class="row">
               <div class="col-md-10">
                  <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard </h1>
               </div>
            </div>
         </div>
         </div>
         </div>
      </header>
      <section id="breadcrumb">
         <div class="container">
            <ol class="breadcrumb">
               <li class="active">Dashboard</li>
            </ol>
         </div>
      </section>
      <?php include 'side-menu.php' ?>
      <div class="col-md-9">
         <!-- Website Overview -->
         <div class="panel panel-default">
            <div class="panel-heading main-color-bg">
               <h3 class="panel-title"> Overview</h3>
            </div>
            <div class="panel-body">
               <div class="col-md-6">
                  <div class="well dash-box">
                     <h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span> 203</h2>
                     <h4>Admissions</h4>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="well dash-box">
                     <h2><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 12</h2>
                     <h4>Test Questions</h4>
                  </div>
               </div>
            <!--   <div class="col-md-4">
                  <div class="well dash-box">
                     <h2><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> 33</h2>
                     <h4>Posts</h4>
                  </div>
               </div> -->

            </div>
         </div>
         <!-- Latest Users -->
         <div class="panel panel-default">
            <div class="panel-heading">
               <h3 class="panel-title">Recent Admissions</h3>
            </div>
            <div class="panel-body">
               <table class="table table-striped table-hover table-bordered">
                  <tr>
                    <th>ID</th>
                     <th>Name</th>
                     <th>Email</th>
                     <th>Course</th>
                     <th>Joined</th>
                  </tr>

                  <tr>
                    <td>1</td>
                     <td>Yash Karanke</td>
                     <td>yashkaranke@gmail.com</td>
                     <td>Msc (IT)</td>
                     <td>27-Sep-2017</td>
                  </tr>

                  <tr>
                     <td>2</td>
                     <td>Jay Pakhadiwala</td>
                     <td>jayp@gmail.com</td>
                     <td>Msc (IT)</td>
                     <td>27-Sep-2017</td>
                  </tr>

                  <tr>
                    <td>3</td>
                     <td>Shaileen Earnest</td>
                     <td>shaileener@gmail.com</td>
                     <td>Msc (IT)</td>
                     <td>27-Sep-2017</td>
                  </tr>


               </table>
            </div>
         </div>
      </div>
      </div>
      </div>
      </section>
      <footer id="footer">

      </footer>
      <!-- Modals -->
      <!-- Add Page -->
      <div class="modal fade" id="addPage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <form>
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                     <h4 class="modal-title" id="myModalLabel">Add Page</h4>
                  </div>
                  <div class="modal-body">
                     <div class="form-group">
                        <label>Page Title</label>
                        <input type="text" class="form-control" placeholder="Page Title">
                     </div>
                     <div class="form-group">
                        <label>Page Body</label>
                        <textarea name="editor1" class="form-control" placeholder="Page Body"></textarea>
                     </div>
                     <div class="checkbox">
                        <label>
                        <input type="checkbox"> Published
                        </label>
                     </div>
                     <div class="form-group">
                        <label>Meta Tags</label>
                        <input type="text" class="form-control" placeholder="Add Some Tags...">
                     </div>
                     <div class="form-group">
                        <label>Meta Description</label>
                        <input type="text" class="form-control" placeholder="Add Meta Description...">
                     </div>
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                     <button type="submit" class="btn btn-primary">Save changes</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
      <script>
         CKEDITOR.replace( 'editor1' );
      </script>
      <!-- Bootstrap core JavaScript
         ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
   </body>
</html>