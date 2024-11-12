<!DOCTYPE html>
<html>

           	@include('api-ui.head');

<body>
<body>
    <div id="app">
        <div id="sidebar" class='active'>
            <div class="sidebar-wrapper active">
      <div class="sidebar-header" >
        
        <p class="title text-primary">SDG Insert Data </p>
    
    </div>
    <div class="sidebar-menu">
        <ul class="menu">
        
            <li class='sidebar-title'>Sustainable Development Goals</li>
            <li class="sidebar-item active ">
                <a href="#" class='sidebar-link'>
                    <i data-feather="home" width="20"></i> 
                    <span>Main SDG Information</span>
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
        <h3>Projects</h3>
        <p class="text-subtitle text-muted">Add Projects Here</p>
    </div>
    <section class="section">
        <div class="row mb-4">
            <div class="col-md-12">
                <div class="card ">
                  
                    <div class="card-body">
                      
                        <form action="index.html">
                            <div class="row">
                                <p><b>Project Contents</b></p>
                                <div class="col-md-8 col-12">
                                   
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="text" id="title" class="form-control"  name="title">
                                    </div>
                               
                                    <div class="form-group">
                                        <label for="logo">Logo</label>
                                        <input type="text" id="logo" class="form-control"  name="logo">
                                    </div>
                              
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea type="text" id="description" class="form-control"  name="description"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="abstract">Abstract</label>
                                        <textarea type="text" id="abstract" class="form-control"  name="abstract"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="overview">Overview</label>
                                        <textarea type="text" id="overview" class="form-control"  name="overview"></textarea>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="image">Image</label>
                                        <input type="text" id="image" class="form-control"  name="image">
                                    </div>
                                    <div class="form-group">
                                        <label for="link">Link</label>
                                        <input type="text" id="link" class="form-control"  name="link">
                                    </div>
                                <p><b>Tags</b></p>

                               		<div class="form-group">
                                        <label for="tag_name">Name</label>
                                        <input type="text" id="tag_name" class="form-control"  name="tag_name">
                                    </div>
                                    <div class="form-group">
                                        <label for="tag_image">Image</label>
                                        <input type="text" id="tag_image" class="form-control"  name="tag_image">
                                    </div>
                                     <button class="btn btn-primary float-right">Save</button>
                                 
                                    	<table class="table">
											  <thead>
											    <tr>
											      <th scope="col">#</th>
											      <th scope="col">Tags ID</th>
											      <th scope="col">Tag Name</th>
											      <th scope="col">Tag Image</th>
											    
											    
											      <th scope="col">Action</th>
											    </tr>
											  </thead>
											  <tbody>
											   
											  </tbody>
											</table> 
                                <p><b>Objectives</b></p>

                               		<div class="form-group">
                                        <label for="objective">Objective</label>
                                        <textarea type="text" id="objective" class="form-control"  name="objective"></textarea>
                                    </div>
                                      <button class="btn btn-primary float-right">Save</button>
                                 
                                    	<table class="table">
											  <thead>
											    <tr>
											      <th scope="col">#</th>
											      <th scope="col">Objective ID</th>
											      <th scope="col">Objective</th>
											    
											    
											      <th scope="col">Action</th>
											    </tr>
											  </thead>
											  <tbody>
											   
											  </tbody>
											</table> 
                                <p><b>Subjects</b></p>
                                    <div class="form-group">
                                        <label for="initiator">Initiator</label>
                                        <input type="text" id="initiator" class="form-control"  name="initiator">
                                    </div>
                                    <div class="form-group">
                                        <label for="leader">Leader</label>
                                        <input type="text" id="leader" class="form-control"  name="leader">
                                    </div>
                                    <button class="btn btn-primary float-right">Save</button>
                                 
                                    	<table class="table">
											  <thead>
											    <tr>
											      <th scope="col">#</th>
											      <th scope="col">Subjects ID</th>
											      <th scope="col">initiator</th>
											      <th scope="col">Leader</th>
											    
											      <th scope="col">Action</th>
											    </tr>
											  </thead>
											  <tbody>
											   
											  </tbody>
											</table>  
                                 <p><b>Environment</b></p>    
                                    <div class="form-group">
                                        <label for="nature">Nature</label>
                                        <input type="text" id="nature" class="form-control"  name="nature">
                                    </div>
                                    <div class="form-group">
                                        <label for="industry">Industry</label>
                                        <input type="text" id="industry" class="form-control"  name="industry">
                                    </div>
                                    <div class="form-group">
                                        <label for="government">Government</label>
                                        <input type="text" id="government" class="form-control"  name="government">
                                    </div>
 									<button class="btn btn-primary float-right">Save</button>
                                 
                                    	<table class="table">
											  <thead>
											    <tr>
											      <th scope="col">#</th>
											      <th scope="col">Environment ID</th>
											      <th scope="col">Nature</th>
											      <th scope="col">Industry</th>
											      <th scope="col">Government</th>
											    
											      <th scope="col">Action</th>
											    </tr>
											  </thead>
											  <tbody>
											   
											  </tbody>
											</table>  
                                 <p><b>Resources</b></p> 
                                 
                                 	<div class="form-group">
                                        <label for="human">Human</label>
                                        <input type="text" id="human" class="form-control"  name="human">
                                    </div>
                                    <div class="form-group">
                                        <label for="financial">Financial</label>
                                        <input type="text" id="financial" class="form-control"  name="financial">
                                    </div>
                                    <div class="form-group">
                                        <label for="technical">Technical</label>
                                        <input type="text" id="technical" class="form-control"  name="technical">
                                    </div> 
                                    <button class="btn btn-primary float-right">Save</button>
                                 
                                    	<table class="table">
											  <thead>
											    <tr>
											      <th scope="col">#</th>
											      <th scope="col">Resources ID</th>
											      <th scope="col">Human</th>
											      <th scope="col">Financial</th>
											      <th scope="col">Technical</th>
											    
											      <th scope="col">Action</th>
											    </tr>
											  </thead>
											  <tbody>
											   
											  </tbody>
											</table>     
                               <p><b>Mechanism</b></p> 

                               		<div class="form-group">
                                        <label for="planning">Planning</label>
                                        <textarea type="text" id="planning" class="form-control"  name="planning"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="design">Design</label>
                                        <textarea type="text" id="design" class="form-control"  name="design"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="installation">Installation</label>
                                        <textarea type="text" id="installation" class="form-control"  name="installation"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="testing">Testing</label>
                                        <textarea type="text" id="testing" class="form-control"  name="testing"></textarea>
                                    </div>
                                     <div class="form-group">
                                        <label for="monitoring">Monitoring</label>
                                        <textarea type="text" id="monitoring" class="form-control"  name="monitoring"></textarea>
                                    </div>
                                <button class="btn btn-primary float-right">Save</button>
                                 
                                    	<table class="table">
											  <thead>
											    <tr>
											      <th scope="col">#</th>
											      <th scope="col">Mechanism ID</th>
											      <th scope="col">Planning</th>
											      <th scope="col">Design</th>
											      <th scope="col">Installation</th>
											      <th scope="col">Testing</th>
											      <th scope="col">Monitoring</th>
											      <th scope="col">Action</th>
											    </tr>
											  </thead>
											  <tbody>
											   
											  </tbody>
											</table>
                                <p><b>Content</b></p> 

                                <div class="form-group">
                                        <label for="content">Content</label>
                                        <textarea type="text" id="content" class="form-control"  name="content"></textarea>
                                    </div>
                                    <button class="btn btn-primary float-right">Save</button>
                                 
                                    	<table class="table">
											  <thead>
											    <tr>
											      <th scope="col">#</th>
											      <th scope="col">Content ID</th>
											      <th scope="col">Content</th>
											      <th scope="col">Action</th>
											    </tr>
											  </thead>
											  <tbody>
											   
											  </tbody>
											</table>
                                <p><b>Waypoints</b></p> 
                                	<div class="form-group">
                                        <label for="waypoint">Waypoint</label>
                                        <input type="text" id="waypoint" class="form-control"  name="waypoint">
                                    </div>
                                     <button class="btn btn-primary float-right">Save</button>
                                 
                                    	<table class="table">
											  <thead>
											    <tr>
											      <th scope="col">#</th>
											      <th scope="col">Waypoint ID</th>
											      <th scope="col">Waypoint</th>
											      <th scope="col">Action</th>
											    </tr>
											  </thead>
											  <tbody>
											   
											  </tbody>
											</table>


                                 	<div class="form-group">
                                        <label for="launchd">Launch Date</label>
                                        <input type="text" id="launchd" class="form-control"  name="launchd">
                                    </div>
                                	
                                 	<div class="form-group">
                                        <label for="proponent">Proponent</label>
                                        <textarea type="text" id="proponent" class="form-control"  name="proponent"></textarea>
                                    </div>
                                  	
                                 	<div class="form-group">
                                        <label for="progress">Progress</label>
                                        <textarea type="text" id="progress" class="form-control"  name="progress"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="problems">Problems</label>
                                        <textarea type="text" id="problems" class="form-control"  name="problems"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="solution">Solution</label>
                                        <textarea type="text" id="solution" class="form-control"  name="solution"></textarea>
                                    </div>


                                 <p><b>Impacts</b></p>     	
                                 	<div class="form-group">
                                        <label for="impact">Impact</label>
                                        <textarea type="text" id="impact" class="form-control"  name="impact"></textarea>
                                    </div>
                                    <button class="btn btn-primary float-right">Save</button>
											<table class="table">
											  <thead>
											    <tr>
											      <th scope="col">#</th>
											      <th scope="col">Impact ID</th>
											      <th scope="col">Impact</th>
											      <th scope="col">Action</th>
											    </tr>
											  </thead>
											  <tbody>
											   
											  </tbody>
											</table>

									<div class="form-group">
                                        <label for="output">Output</label>
                                        <textarea type="text" id="output" class="form-control"  name="output"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="costing">Costing</label>
                                        <textarea type="text" id="costing" class="form-control"  name="costing"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="future">Future</label>
                                        <textarea type="text" id="future" class="form-control"  name="future"></textarea>
                                    </div>
                                   
                               
                               	</div>
                                
                            	</div>

                             <br>
                            <div class="clearfix">
                                <button class="btn btn-success float-right">Save Project</button>
                            </div>

                        </form>
                        <div class="row">
                        	 <p><b>Projects List</b></p> 
                        		<table class="table">
											  <thead>
											    <tr>
											      <th scope="col">#</th>
											      <th scope="col">ID</th>
											      <th scope="col">Title</th>
											      <th scope="col">Logo</th>
											      <th scope="col">Description</th>
											      <th scope="col">Abstract</th>
											      <th scope="col">Overview</th>
											      <th scope="col">Image</th>
											      <th scope="col">Link</th>
											      <th scope="col">Tags</th>
											      <th scope="col">Objectives</th>
											      <th scope="col">Subject</th>
											      <th scope="col">Environment</th>
											      <th scope="col">Resources</th>
											      <th scope="col">Mechanism</th>
											      <th scope="col">Content</th>
											      <th scope="col">waypoints</th>
											      <th scope="col">launchd</th>
											      <th scope="col">Proponent</th>
											      <th scope="col">Progress</th>
											      <th scope="col">Problems</th> 
											      <th scope="col">Solution</th>
											      <th scope="col">Impact</th>
											      <th scope="col">Research</th>
											      <th scope="col">Costing</th> 
											    <th scope="col">Future</th> 
											    
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