<!DOCTYPE html>
<html>

           	@include('api-ui.head');

<body>
<body>
    <div id="app">
        <div id="sidebar" class='active'>
            <div class="sidebar-wrapper active">
      <div class="sidebar-header" >
        
        <p class="title text-primary">SDG Article Information </p>
    
    </div>
    <div class="sidebar-menu">
        <ul class="menu">
        
            <li class='sidebar-title'>Sustainable Development Goals</li>
            <li class="sidebar-item  ">
                <a href="/sdg_marsu/create-project" class='sidebar-link'>
                    <i data-feather="home" width="20"></i> 
                    <span>Project Information</span>
                </a>
                
            </li>
			<li class="sidebar-item active">
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
        <h3 class="text-white">Articles</h3>
        <p class="text-subtitle text-white">Add Articles Here</p></div>
    </div>
    <section class="section">
        <div class="row mb-4">
            <div class="col-md-12">
                <div class="card ">
                  
                    <div class="card-body">
                      
                        <form action="index.html">
                            <div class="row">
                             
                                <div class="col-md-8 col-12">
                                   
                                    
                                    <div class="form-group">
                                        <label for="headline">Headline</label>
                                        <textarea  id="headline" class="form-control"  name="headline"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="sub_headline">Subheadline</label>
                                        <textarea  id="sub_headline" class="form-control"  name="sub_headline"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="by_line">Byline</label>
                                        <input type="text" id="by_line" class="form-control"  name="by_line">
                                    </div>
                                    <div class="form-group">
                                        <label for="lead_paragraph">Lead Paragraph</label>
                                        <textarea  id="lead_paragraph" class="form-control"  name="lead_paragraph"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="background_information">Background Information</label>
                                        <textarea type="date" id="background_information" class="form-control"  name="background_information"></textarea>
                                    </div>
                                    
                                    
                                    <div class="form-group">
                                        <label for="highlights">Main Activities and Highlights</label>
                                        <textarea  id="highlights" class="form-control"  name="highlights"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="impact">Impact</label>
                                       <textarea id="impact" class="form-control"  name="impact"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="future_plans">Future Plans</label>
                                       <textarea id="future_plans" class="form-control"  name="future_plans"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="conclusion">Conclusion</label>
                                       <textarea id="conclusion" class="form-control"  name="conclusion"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="call_to_action">Call to Action</label>
                                       <textarea id="call_to_action" class="form-control"  name="call_to_action"></textarea>
                                    </div>
                               <p><b>Background Article</b></p>

                                    <div class="form-group">
                                        <label for="background">background</label>
                                        <textarea type="text" id="background" class="form-control"  name="background"></textarea>
                                    </div>
                                    <div class="alert text-white" style="background-color: #800200;" role="alert">
Additional Reminder
                                    </div>
                               

                                    <div class="form-group">
                                        <label for="highlights">Reminder</label>
                                        <input type="text" id="highlights" class="form-control"  name="highlights">
                                    </div>
                                     <button class="btn btn-primary float-right">Save</button>
                                 
                                        <table class="table">
                                              <thead>
                                                <tr>
                                                  <th scope="col">#</th>
                                                  <th scope="col">Reminder</th>
                                                
                                                
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
                                <button class="btn btn-success float-right">Save Article</button>
                                <br>
                                <br>
                            </div>

                        </form>
                        <div class="row">
                            <div class="alert alert-primary" role="alert">
                                <h3 class="text-white">Projects List</h3>
                            </div>
                       
                        		<table class="table">
											  <thead>
											    <tr>
											      <th scope="col">#</th>
											      <th scope="col">Headline</th>
                                                  <th scope="col">Sub Headline</th>
											      <th scope="col">Title</th>
											      
											      <th scope="col">Byline</th>
											      <th scope="col">Lead Paragraph</th>
											      <th scope="col">Background Information</th>
											      
											      <th scope="col">Main Activities & Highlights</th>
                                            
											      <th scope="col">Impact</th>
											      <th scope="col">Future Plans</th>
											    
											      <th scope="col">Conclusion</th>
											      <th scope="col">Call to Action</th>
											      <th scope="col">Background</th>
											      <th scope="col">Reminder</th>
											    
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