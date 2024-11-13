<!DOCTYPE html>
<html>

            @include('api-ui.head');

<body>
<body>
    <div id="app">
        <div id="sidebar" class='active'>
            <div class="sidebar-wrapper active">
      <div class="sidebar-header" >
        
        <p class="title text-primary">SDG Project Information </p>
    
    </div>
    <div class="sidebar-menu">
        <ul class="menu">
        
            <li class='sidebar-title'>Sustainable Development Goals</li>
            <li class="sidebar-item  active">
                <a href="/sdg_marsu/create-project" class='sidebar-link'>
                    <i data-feather="home" width="20"></i> 
                    <span>Project Information</span>
                </a>
                
            </li>
            <li class="sidebar-item ">
                <a href="/sdg_marsu/create-article" class='sidebar-link'>
                    <i data-feather="home" width="20"></i> 
                    <span>SDG Article</span>
                </a>
                
            </li>
    </ul>
    </div>
    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
</div>
        </div>
        <div id="main">
            <nav class="navbar navbar-header navbar-expand navbar-light">
                <a class="sidebar-toggler" href="#"><span class="navbar-toggler-icon"></span></a>
                <button class="btn navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
               
            </nav>
            
<div class="main-content container-fluid">
    <div class="page-title">
        <div class="alert text-white" style="background-color: #800200;" role="alert">
        <h3 class="text-white">Projects</h3>
        <p class="text-subtitle text-white">Add Projects Here</p></div>
    </div>
    <section class="section">
        <div class="row mb-4">
            <div class="col-md-12">
                <div class="card ">
                  
                    <div class="card-body">
                      
                        <form action="index.html">
                            <div class="row">
                                
                              
                                <div class="col-md-8 col-12">
                                   
                                    <div class="alert alert-primary" role="alert">
                                          <h4 class="text-white">Project Introduction</h4>
                                        </div>
                                    <div class="form-group">
                                        <label for="image">Image</label>
                                        <input type="text" id="image" class="form-control"  name="image">
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="text" id="title" class="form-control"  name="title">
                                    </div>
                                    <div class="form-group">
                                        <label for="subtitle">Subtitle</label>
                                        <textarea type="text" id="subtitle" class="form-control"  name="subtitle"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="author">Author</label>
                                        <input type="text" id="author" class="form-control"  name="author">
                                    </div>
                                    <div class="form-group">
                                        <label for="proj_date">Date</label>
                                        <input type="date" id="proj_date" class="form-control"  name="proj_date">
                                    </div>
                                    
                                    
                                    <div class="form-group">
                                        <label for="link">Link</label>
                                        <input type="text" id="link" class="form-control"  name="link">
                                    </div>
                                    <div class="form-group">
                                        <label for="logo">Logo</label>
                                        <input type="text" id="logo" class="form-control"  name="logo">
                                    </div>
                                    <div class="alert alert-primary" role="alert">
                                          <h4 class="text-white">Contents</h4>
                                        </div>
                                   
                            

                                    <div class="form-group">
                                        <label for="background">Background</label>
                                        <textarea type="text" id="background" class="form-control"  name="background"></textarea>
                                    </div>
                                
                                 <div class="alert text-white" style="background-color: #800200;"  role="alert">
                                          Highlights
                                        </div>

                                    <div class="form-group">
                                        <label for="highlights">Highlights</label>
                                        <input type="text" id="highlights" class="form-control"  name="highlights">
                                    </div>
                                     <button class="btn btn-primary float-right">Save</button>
                                 
                                        <table class="table">
                                              <thead>
                                                <tr>
                                                  <th scope="col">#</th>
                                                  <th scope="col">highlights</th>
                                                
                                                
                                                  <th scope="col">Action</th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                               
                                              </tbody>
                                            </table>  
                              
                                  <div class="alert text-white" style="background-color: #800200;"  role="alert">
                                          Impacts
                                        </div>    
                                    <div class="form-group">
                                        <label for="impact">Impact</label>
                                        <textarea type="text" id="impact" class="form-control"  name="impact"></textarea>
                                    </div>
                                    <button class="btn btn-primary float-right">Save</button>
                                            <table class="table">
                                              <thead>
                                                <tr>
                                                  <th scope="col">#</th>
                                                  <th scope="col">Impact</th>
                                                  <th scope="col">Action</th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                               
                                              </tbody>
                                            </table> 
                          
                                 <div class="alert text-white" style="background-color: #800200;"  role="alert">
                                          Outcomes
                                        </div>      
                                    <div class="form-group">
                                        <label for="outcome">Outcome</label>
                                        <textarea type="text" id="outcome" class="form-control"  name="outcome"></textarea>
                                    </div>
                                    <button class="btn btn-primary float-right">Save</button>
                                            <table class="table">
                                              <thead>
                                                <tr>
                                                  <th scope="col">#</th>
                                                  <th scope="col">Outcome</th>
                                                  <th scope="col">Action</th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                               
                                              </tbody>
                                            </table> 
                             
                                  <div class="alert text-white" style="background-color: #800200;"  role="alert">
                                          Plans
                                        </div>       
                                    <div class="form-group">
                                        <label for="plan">Plan</label>
                                        <textarea type="text" id="plan" class="form-control"  name="plan"></textarea>
                                    </div>
                                    <button class="btn btn-primary float-right">Save</button>
                                            <table class="table">
                                              <thead>
                                                <tr>
                                                  <th scope="col">#</th>
                                                  <th scope="col">Outcome</th>
                                                  <th scope="col">Action</th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                               
                                              </tbody>
                                            </table> 
                                 <div class="alert alert-primary" role="alert"><h4 class="text-white">Other Contents</b></div>
                                <div class="form-group">
                                        <label for="conclusion">Conclusion</label>
                                        <input type="text" id="conclusion" class="form-control"  name="conclusion">
                                    </div>
                                 <div class="form-group">
                                        <label for="cta">CTA</label>
                                        <input type="text" id="cta" class="form-control"  name="cta">
                                    </div>

                                    <div class="alert text-white" style="background-color: #800200;"  role="alert">
                                          Tags
                                        </div> 
                              

                                    <div class="form-group">
                                        <label for="tag_name">Name</label>
                                        <input type="text" id="tag_name" class="form-control"  name="tag_name">
                                    </div>
                                    <div class="form-group">
                                        <label for="tag_icon">Icon</label>
                                        <input type="text" id="tag_icon" class="form-control"  name="tag_icon">
                                    </div>
                                     <button class="btn btn-primary float-right">Save</button>
                                 
                                        <table class="table">
                                              <thead>
                                                <tr>
                                                  <th scope="col">#</th>
                                             
                                                  <th scope="col">Tag Name</th>
                                                  <th scope="col">Tag Icon</th>
                                                
                                                
                                                  <th scope="col">Action</th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                               
                                              </tbody>
                                            </table> 
                      
                                <div class="alert text-white" style="background-color: #800200;"  role="alert">
                                          Gallery
                                        </div> 

                                    <div class="form-group">
                                        <label for="gallery_image">Gallery Image</label>
                                        <input type="text" id="gallery_image" class="form-control"  name="gallery_image">
                                    </div>
                                    <div class="form-group">
                                        <label for="gallery_caption">Caption</label>
                                        <input type="text" id="gallery_caption" class="form-control"  name="gallery_caption">
                                    </div>
                                    <div class="form-group">
                                        <label for="gallery_alt">Alt</label>
                                        <input type="text" id="gallery_alt" class="form-control"  name="gallery_alt">
                                    </div>
                                     <button class="btn btn-primary float-right">Save</button>
                                 
                                        <table class="table">
                                              <thead>
                                                <tr>
                                                  <th scope="col">#</th>
                                             
                                                  <th scope="col">Gallery Image</th>
                                                  <th scope="col">Caption</th>
                                                <th scope="col">Alt</th>
                                                
                                                  <th scope="col">Action</th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                               
                                              </tbody>
                                            </table> 
                               
                                   
                               
                                </div>
                                
                                </div>

                             <br>
                            <div class="clearfix">
                                <button class="btn btn-success float-right">Save Project</button>
                                <br>   <br>
                            </div>

                        </form>
                        <div class="row">
                            <div class="alert alert-primary" role="alert">
                             <h4 class="text-white">Projects List</h4> </div>
                                <table class="table">
                                              <thead>
                                                <tr>
                                                  <th scope="col">#</th>
                                                  <th scope="col">ID</th>
                                                  <th scope="col">Image</th>
                                                  <th scope="col">Title</th>
                                                  
                                                  <th scope="col">Subtitle</th>
                                                  <th scope="col">Abstract</th>
                                                  <th scope="col">Date</th>
                                                  
                                                  <th scope="col">Background</th>
                                                  <th scope="col">Highlights</th>
                                                  <th scope="col">Impacts</th>
                                                  <th scope="col">Outcomes</th>
                                                  <th scope="col">Plans</th>
                                                  <th scope="col">Conclusion</th>
                                                  <th scope="col">CTA</th>
                                                  <th scope="col">Tags</th>
                                                  <th scope="col">Gallery</th>
                                                
                                                  <th scope="col">Action</th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                               
                                              </tbody>
                                            </table> 
                        </div>
                    </div>
                </div>
                
            </div>
            
           
        </div>
    
    </section>
</div>

            @include('api-ui.footer');
      
        </div>
    </div>
     <script src="{{ url('assets/js/feather-icons/feather.min.js') }}"></script>
    <script src="{{ url('assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ url('assets/js/app.js') }}"></script>
    
    <script src="{{ url('assets/vendors/chartjs/Chart.min.js') }}"></script>
    <script src="{{ url('assets/vendors/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ url('assets/js/pages/dashboard.js') }}"></script>

    <script src="{{ url('assets/js/main.js') }}"></script>
</body>
</html>