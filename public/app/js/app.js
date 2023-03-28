(function($){"use strict";var $wrapper=$('.main-wrapper');var $pageWrapper=$('.page-wrapper');var $slimScrolls=$('.slimscroll');var $sidebarOverlay=$('.sidebar-overlay');var Sidemenu=function(){this.$menuItem=$('#sidebar-menu a');};function init(){var $this=Sidemenu;$('#sidebar-menu a').on('click',function(e){if($(this).parent().hasClass('submenu')){e.preventDefault();}
if(!$(this).hasClass('subdrop')){$('ul',$(this).parents('ul:first')).slideUp(350);$('a',$(this).parents('ul:first')).removeClass('subdrop');$(this).next('ul').slideDown(350);$(this).addClass('subdrop');}else if($(this).hasClass('subdrop')){$(this).removeClass('subdrop');$(this).next('ul').slideUp(350);}});$('#sidebar-menu ul li.submenu a.active').parents('li:last').children('a:first').addClass('active').trigger('click');}
init();$('body').append('<div class="sidebar-overlay"></div>');$(document).on('click','#mobile_btn',function(){$wrapper.toggleClass('slide-nav');$('.sidebar-overlay').toggleClass('opened');$('html').addClass('menu-opened');return false;});$(".sidebar-overlay").on("click",function(){$wrapper.removeClass('slide-nav');$(".sidebar-overlay").removeClass("opened");$('html').removeClass('menu-opened');});$(document).on('click','#task_chat',function(){var $target=$($(this).attr('href'));console.log($target);sidebar_overlay($target);return false;});$sidebarOverlay.on('click',function(){var $target=$($(this).attr('data-reff'));if($target.length){$target.removeClass('opened');$('html').removeClass('menu-opened');$(this).removeClass('opened');$wrapper.removeClass('slide-nav');}
return false;});if($('.select').length>0){$('.select').select2({minimumResultsForSearch:-1,width:'100%'});}
if($('.floating').length>0){$('.floating').on('focus blur',function(e){$(this).parents('.form-focus').toggleClass('focused',(e.type==='focus'||this.value.length>0));}).trigger('blur');}
if($('#msg_list').length>0){$('#msg_list').slimscroll({height:'100%',color:'#878787',disableFadeOut:true,borderRadius:0,size:'4px',alwaysVisible:false,touchScrollStep:100});var msgHeight=$(window).height()-124;$('#msg_list').height(msgHeight);$('.msg-sidebar .slimScrollDiv').height(msgHeight);$(window).resize(function(){var msgrHeight=$(window).height()-124;$('#msg_list').height(msgrHeight);$('.msg-sidebar .slimScrollDiv').height(msgrHeight);});}
if($slimScrolls.length>0){$slimScrolls.slimScroll({height:'auto',width:'100%',position:'right',size:'7px',color:'#ccc',wheelStep:10,touchScrollStep:100});var wHeight=$(window).height()-60;$slimScrolls.height(wHeight);$('.sidebar .slimScrollDiv').height(wHeight);$(window).resize(function(){var rHeight=$(window).height()-60;$slimScrolls.height(rHeight);$('.sidebar .slimScrollDiv').height(rHeight);});}
var pHeight=$(window).height();$pageWrapper.css('min-height',pHeight);$(window).resize(function(){var prHeight=$(window).height();$pageWrapper.css('min-height',prHeight);});if($('.datetimepicker').length>0){$('.datetimepicker').datetimepicker({format:'DD/MM/YYYY'});}
if($('.datatable').length>0){$('.datatable').DataTable({"bFilter":false,});}
if($('[data-toggle="tooltip"]').length>0){$('[data-toggle="tooltip"]').tooltip();}
$(document).on('click','#open_msg_box',function(){$wrapper.toggleClass('open-msg-box');return false;});$(document).on('mouseover',function(e){e.stopPropagation();if($('body').hasClass('mini-sidebar')&&$('#toggle_btn').is(':visible')){var targ=$(e.target).closest('.sidebar').length;if(targ){$('body').addClass('expand-menu');$('.subdrop + ul').slideDown();}else{$('body').removeClass('expand-menu');$('.subdrop + ul').slideUp();}
return false;}});$(document).on('click','#filter_search',function(){$('#filter_inputs').slideToggle("slow");});if($('.custom-file-container').length>0){var firstUpload=new FileUploadWithPreview('myFirstImage')
var secondUpload=new FileUploadWithPreview('mySecondImage')}
if($('.clipboard').length>0){var clipboard=new Clipboard('.btn');}
if($('#summernote').length>0){$('#summernote').summernote({height:300,minHeight:null,maxHeight:null,focus:true});}
if($('[data-bs-toggle="tooltip"]').length>0){var tooltipTriggerList=[].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList=tooltipTriggerList.map(function(tooltipTriggerEl){return new bootstrap.Tooltip(tooltipTriggerEl)})}
if($('.popover-list').length>0){var popoverTriggerList=[].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
var popoverList=popoverTriggerList.map(function(popoverTriggerEl){return new bootstrap.Popover(popoverTriggerEl)})}
if($('.counter').length>0){$('.counter').counterUp({delay:20,time:2000});}
if($('#timer-countdown').length>0){$('#timer-countdown').countdown({from:180,to:0,movingUnit:1000,timerEnd:undefined,outputPattern:'$day Day $hour : $minute : $second',autostart:true});}
if($('#timer-countup').length>0){$('#timer-countup').countdown({from:0,to:180});}
if($('#timer-countinbetween').length>0){$('#timer-countinbetween').countdown({from:30,to:20});}
if($('#timer-countercallback').length>0){$('#timer-countercallback').countdown({from:10,to:0,timerEnd:function(){this.css({'text-decoration':'line-through'}).animate({'opacity':.5},500);}});}
if($('#timer-outputpattern').length>0){$('#timer-outputpattern').countdown({outputPattern:'$day Days $hour Hour $minute Min $second Sec..',from:60*60*24*3});}
if($('[data-toggle="popover"]').length>0){$('[data-toggle="popover"]').popover();}
if($('#lightgallery').length>0){$('#lightgallery').lightGallery({thumbnail:true,selector:'a'});}
if($('#incoming_call').length>0){$('#incoming_call').modal('show');}
if($('.summernote').length>0){$('.summernote').summernote({height:200,minHeight:null,maxHeight:null,focus:false});}
$(document).on('click','#check_all',function(){$('.checkmail').click();return false;});if($('.checkmail').length>0){$('.checkmail').each(function(){$(this).on('click',function(){if($(this).closest('tr').hasClass('checked')){$(this).closest('tr').removeClass('checked');}else{$(this).closest('tr').addClass('checked');}});});}
$(document).on('click','.mail-important',function(){$(this).find('i.fa').toggleClass('fa-star').toggleClass('fa-star-o');});if($('#drop-zone').length>0){var dropZone=document.getElementById('drop-zone');var uploadForm=document.getElementById('js-upload-form');var startUpload=function(files){console.log(files);};uploadForm.addEventListener('submit',function(e){var uploadFiles=document.getElementById('js-upload-files').files;e.preventDefault();startUpload(uploadFiles);});dropZone.ondrop=function(e){e.preventDefault();this.className='upload-drop-zone';startUpload(e.dataTransfer.files);};dropZone.ondragover=function(){this.className='upload-drop-zone drop';return false;};dropZone.ondragleave=function(){this.className='upload-drop-zone';return false;};}
$(document).on('click','#toggle_btn',function(){if($('body').hasClass('mini-sidebar')){$('body').removeClass('mini-sidebar');$('.subdrop + ul').slideDown();}else{$('body').addClass('mini-sidebar');$('.subdrop + ul').slideUp();}
return false;});$(document).on('mouseover',function(e){e.stopPropagation();if($('body').hasClass('mini-sidebar')&&$('#toggle_btn').is(':visible')){var targ=$(e.target).closest('.sidebar').length;if(targ){$('body').addClass('expand-menu');$('.subdrop + ul').slideDown();}else{$('body').removeClass('expand-menu');$('.subdrop + ul').slideUp();}
return false;}});})(jQuery);if($('#datetimepicker1').length>0){$(function(){$('#datetimepicker1').datetimepicker();$('#datetimepicker2').datetimepicker();$('#datetimepicker3').datetimepicker();$('#datetimepicker4').datetimepicker();$('#datetimepicker5').datetimepicker();});}