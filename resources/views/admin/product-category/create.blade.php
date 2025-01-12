   <!-- Modal -->
   <div class="modal fade" id="CategoryModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog modal-dialog-centered">
           <div class="modal-content">
               <div class="modal-header">
                   <h1 class="modal-title fs-5" id="exampleModalLabel">Create Category</h1>
                   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                   <form action="" method="post">
                       @csrf
                       <div>
                           <div class="col-12 has-validated">
                               <label class="form-label mb-2">Category Code</label>
                               <input type="text" name="category_code" class="form-control"
                                   placeholder="Enter category code">
                           </div>

                           <div class="col-12 has-validated">
                               <label class="form-label">Category Name</label>
                               <input type="text" name="category_code" class="form-control"
                                   placeholder="Enter category code">
                           </div>

                           <div class="col-12 has-validated">
                               <label class="form-label">Description</label>
                               <textarea class="form-control" rows="4" cols="50" placeholder="Enter a description..." required=""></textarea>
                               <div class="invalid-feedback">
                                   Please enter a message in the textarea.
                               </div>
                           </div>

                       </div>
               </div>
               <div class="modal-footer">
                   <button type="button" class="btn text-sm  btn-danger-600 radius-8 px-14"
                       data-bs-dismiss="modal">Cancel </button>
                   <button type="button" class="btn btn-primary-800  radius-8 px-14 text-sm">Create Category</button>
               </div>
               </form>
           </div>
       </div>
   </div>
