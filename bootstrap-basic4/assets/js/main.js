'use strict';

jQuery(document).ready(function( $ ) {

  // Handle Form Submitssion

  $('#ebook-form').submit(function(e){

    var pdfFile = '/wp-content/themes/bootstrap-basic4/assets/pdf/Insperity-hr-outsourcing-a-step-by-step-guide-to-professional-employer-organizations.pdf';

    var modalHtml = '<a target="_blank" href="'+pdfFile+'" download id="download" hidden></a>'+
                    '<div class="modal fade" id="modal-pdf">'+
                      '<div class="modal-dialog modal-lg" role="document">'+
                        '<div class="modal-content">'+
                          '<div class="modal-body">'+
                            '<button type="button" class="close" data-dismiss="modal" aria-label="Close">'+
                              '<span aria-hidden="true">&times;</span>'+
                            '</button>'+
                            '<object type="application/pdf" data="'+pdfFile+'" width="100%" height="500" style="height: 85vh;">No Support</object>'+
                          '</div>'+
                          '<div class="modal-footer">'+
                            '<button onClick="document.getElementById(\'download\').click()" type="button" class="btn btn-primary">Download PDF</button>'+
                            '<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>'+
                          '</div>'+
                        '</div>'+
                      '</div>'+
                    '</div>';

      var ast = ' <span class="text-danger">*</span>';
      var formValid = true;
      e.preventDefault();
      var $form = $(this);


      // check if the input is valid
      $(".form-control").each(function(e){
        $(this).prev().find('span').remove();
        if($(this).val() == ''){
          $(this).prev().append(ast);
          formValid = false;
        }
      });

      if(formValid === false) return false;

       $.ajax({
          success: function(response) {
            $('#ebook-form').slideUp('fast');
            $(".form-control").each(function(e){
              var label = $(this).prev().html();
              $("#ebook-form-response").append('<div class="form-respone-field">'+label+': '+$(this).val()+'</div>');
            });
            $('body').prepend(modalHtml);
            $('#modal-pdf').modal();
          }
        });
  });

});
