<?php
/* connect to gmail */
$hostname = '{imap.gmail.com:993/imap/ssl}INBOX'; //gmail server connector
$username = '****'; //your gmail account username -- username@gmail.com
$password = '****'; //your gmail password

/* try to connect */
$inbox = imap_open($hostname,$username,$password) or die('Cannot connect to Gmail: ' . imap_last_error());

/* grab emails */
$emails = imap_search($inbox,'ALL');

/* begin output var */
	//$output_out = '';
	$output_inside = '';
	
	//$output_out = '<table class="table table-striped table-advance table-hover"> ' ;
	$output_out1 = ' <table class="table table-striped table-advance table-hover">
	<thead>
		<tr>
			<th colspan="3">
				<input type="checkbox" class="mail-checkbox mail-group-checkbox">
				<div class="btn-group">
					<a class="btn mini blue" href="#" data-toggle="dropdown">
					More
					<i class="icon-angle-down "></i>
					</a>
					<ul class="dropdown-menu">
						<li><a href="#"><i class="icon-pencil"></i> Mark as Read</a></li>
						<li><a href="#"><i class="icon-ban-circle"></i> Spam</a></li>
						<li class="divider"></li>
						<li><a href="#"><i class="icon-trash"></i> Delete</a></li>						
					</ul>
				</div>
			</th>
			<th class="text-right" colspan="3">
				<ul class="unstyled inline inbox-nav">
					<li><span>1-30 of 789</span></li>
					<li><i class="icon-angle-left  pagination-left"></i></li>
					<li><i class="icon-angle-right pagination-right"></i></li>
				</ul>
			</th>
		</tr> </thead> ' ;
	$output_out2 = '<tbody>';
	$output_inside1 = '' ;
		

/* if emails are returned, cycle through each... */
if($emails) {
	
	
	
	/* put the newest emails on top */
	rsort($emails);
	
	/* for every email... */
	
	
	foreach($emails as $email_number) 
	{
		
		/* get information specific to this email */
		$overview = imap_fetch_overview($inbox,$email_number,0);
		$message = imap_fetchbody($inbox,$email_number,2);
		
		/* output the email header information */
		//$output.= '<div class="toggler '.($overview[0]->seen ? 'read' : 'unread').'">';
	    
		$output_inside .= '<tr class="unread">';
		$output_inside .=  '<td class="inbox-small-cells">
				<input type="checkbox" class="mail-checkbox">
			</td>';
		$output_inside .=  '<td class="inbox-small-cells"><i class="icon-star"></i></td>
			<td class="view-message  hidden-phone">'.$overview[0]->subject.'</td>
			<td class="view-message ">'.$overview[0]->from.'</td>
			<td class="view-message  inbox-small-cells"><i class="icon-paper-clip"></i></td>
			<td class="view-message  text-right">'.$overview[0]->date.'</td>';	
		$output_inside .= '</tr>'	;
		
		/* output the email body */
		//$output.= '<div class="body">'.$message.'</div>';
	}
	
	$output_inside1 =  '</tbody></table>';
} 

/* close the connection */
   imap_close($inbox);
//////now we write the file
     $file = "inbox_inbox.html"; 
  // create file pointer
   $filename = fopen('inbox_inbox.html', 'w') or die('Could not open file, or file does not exist and failed to create.');
    // Let's make sure the file exists and is writable first. 
   if (is_writable($file )) { 
 
   
   if (!$handle = fopen($file , 'w')) { 
         echo "Cannot open file ($file )"; 
         exit; 
   } 
 
   // Write $somecontent to our opened file. 
   /*if (fwrite($handle, $output_out) === false) { 
       echo "Cannot write to file ($file)"; 
       exit; */
   //}else{ 
      //file is ok so write the other elements to it 
    //  fwrite($handle, $output_out); 
	  fwrite($handle, $output_out1);
	  fwrite($handle, $output_out2);
	  fwrite($handle, $output_inside);
	  fwrite($handle, $output_inside1);
     // fwrite($handle, $sHTML_Footer); 
	 echo "File Contents Created!";
   //} 
 
   fclose($handle); 
 
   }
   else{ 
   echo "The file $file is not writable"; }
?>