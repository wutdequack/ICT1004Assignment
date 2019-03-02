/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// Enlarge image with modals
$(document).ready(function () {
        $('#awards-modal').on('show.bs.modal', function (e) {
            var image = $(e.relatedTarget).attr('src');
            $(".img-responsive").attr("src", image);
        });
});
