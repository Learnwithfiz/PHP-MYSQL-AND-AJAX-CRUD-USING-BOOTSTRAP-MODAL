<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AJAX CRUD USING MODAL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
        <div class="row">
            <h1 class="bg-dark text-white p-2 text-center">Php And MYSQL With AJAX CRUD USING MODAL</h1>
            <div class="col-lg-12">
                <button class="btn btn-primary p-2"data-bs-toggle="modal" data-bs-target="#exampleModal">Add Student</button>
               <!---modal for insert data-->

<!-- Button trigger modal -->


                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Student Information</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form>
                          <input type="text" id="name" placeholder="enter name" class="form-control">
                          <input type="email" id="email" placeholder="enter email" class="form-control">    
                          <input type="text" id="dept" placeholder="enter dept" class="form-control">
                         
                      </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" onclick="AddStudentDetails()" class="btn btn-primary">Save</button>
                    </div>
                    </div>
                </div>
                </div>

               <!--modal ends here for insert data-->
              <table class="table">
                <th>id</th>
                <th>name</th>
                <th>email</th>
                <th>dept</th>
                <th>Delete</th>
                <th>Edit</th>
                <tbody id="tbody">

                </tbody>
              </table>
            </div>
        </div>
      </div>
            


      <!--modal for update -->

      <div class="modal fade" id="updatModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">update Student Information</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form>
                          <input type="text" id="upname" placeholder="enter name" class="form-control">
                          <input type="email" id="upemail" placeholder="enter email" class="form-control">    
                          <input type="text" id="updept" placeholder="enter dept" class="form-control">
                         
                      </form>
                    </div>
                    <div class="modal-footer">
                      <input type="hidden" id="hiddenId">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" onclick="UserUpdate()" class="btn btn-primary">update</button>
                    
                      </div>
                    </div>
                </div>
                </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
   <script src="index.js"></script>
</body>
</html>