<?php
/**
 * Our Team section
 *
 * @package zerif-lite
 */

       
                            $current_post_id = get_the_ID();

                            $job_title = get_the_title();
                            $job_role = get_post_meta( $current_post_id, 'job_role', true );
                            $job_experience = get_post_meta( $current_post_id, 'job_experience', true );
                            $job_type = get_post_meta( $current_post_id, 'job_type', true );
                            $client_name = get_post_meta( $current_post_id, 'client_name', true );
                            $job_location = get_post_meta( $current_post_id, 'job_location', true );
                            $job_exp_date = get_post_meta( $current_post_id, 'job_exp_date', true );
                            $job_skill = get_post_meta( $current_post_id, 'job_skill', true );	
                            $job_link = get_permalink();

                            $jobHtml = '<section class="panel panel-default">'
                                                .'<div class="panel-heading">'
                                                    .'<h3 class="panel-title">'.$job_title.' <small>(Exp required : '. $job_experience .')</small> '
                                                        .'<a data-toggle="collapse"  href="#job-panel-'.$current_post_id.'" data-parent="#job-accordion" class="btn btn-danger btn-xs pull-right">View Job</a>&nbsp;'
                                                        .'<a href="'. $job_link .'" class="pull-right btn btn-primary btn-xs">Apply now</a>&nbsp;'
                                                        .'</h3>'
                                                .'</div>'
                                                .'<div class="panel-collapse collapse" id="job-panel-'.$current_post_id.'">'
                                                    .'<div class="panel-body">'
                                                    .'<div class="info-box-wrap">'
                                                        .'<div class="info-box"><i class="fa fa-building"></i><span>Client Name</span><span>'.$client_name.'</span></div>'
                                                        .'<div class="info-box"><i class="fa fa-user"></i><span>Job Role</span><span>'.$job_role.'</span></div>'
                                                        .'<div class="info-box"><i class="fa fa-gavel"></i><span>Skills Required</span><span>'.$job_skill.'</span></div>'
                                                        .'<div class="info-box"><i class="fa fa-list-alt"></i><span>Job Type</span><span>'.$job_type.'</span></div>'
                                                        .'<div class="info-box"><i class="fa fa-map-pin"></i><span>Job Location</span><span>'.$job_location.'</span></div>'
                                                    .'</div>'
                                                    .'<div class="text-center"><a href="'. $job_link .'" class="btn btn-info btn-sm">View JD</a></div>'
                                                    .'</div><!--panel body-->'
                                                .'</div>'
                                            .'</section><!--panel panel-default-->';     

                        echo $jobHtml;
                    