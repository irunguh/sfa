  <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->
            <div class="row-fluid">
               <div class="span12">   
                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->			
			<h3 class="page-title">Inbox<small>user inbox</small></h3>
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a> 
										
					<i class="icon-angle-right"></i>
									</li>
								<li>
					<a href="#">Messages</a>
										
					<i class="icon-angle-right"></i>
									</li>
				<li><a href="#">Inbox</a></li>
						
						
			</ul>
		<!-- END PAGE TITLE & BREADCRUMB-->
               </div>
            </div>
            <div class="row-fluid inbox">
               <div class="span2">
                  <ul class="inbox-nav margin-bottom-10">
                     <li class="compose-btn">
                        <a href="javascript:;" data-title="Compose" class="btn green"> 
                        <i class="icon-edit"></i> Compose
                        </a>
                     </li>
                     <li class="inbox active">
                        <a href="javascript:;" class="btn" data-title="Inbox">Inbox(3)</a>
                        <b></b>
                     </li>
                     <li class="sent"><a class="btn" href="javascript:;"  data-title="Sent">Sent</a><b></b></li>
                     <li class="draft"><a class="btn" href="javascript:;" data-title="Draft">Draft</a><b></b></li>
                     <li class="trash"><a class="btn" href="javascript:;" data-title="Trash">Trash</a><b></b></li>
                  </ul>
               </div>
               <div class="span10">
                  <div class="inbox-header">
                     <h1 class="pull-left">Inbox</h1>
                     <form action="#" class="form-search pull-right">
                        <div class="input-append">
                           <input class="m-wrap" type="text" placeholder="Search Mail">
                           <button class="btn green" type="button">Search</button>
                        </div>
                     </form>
                  </div>
                  <div class="inbox-loading">Loading...</div>
                  <div class="inbox-content">
                  </div>
               </div>
            </div>
         </div>
         <!-- EN