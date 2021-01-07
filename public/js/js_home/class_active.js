$(function(){
           $('.nav .main-menu .menu .navbar-nav a').filter(function(){
               return this.href==location.href}).parent().addClass('active').siblings().removeClass('active');

           $('.nav .main-menu .menu .navbar-nav a').click(function(){
               $(this).parent().addClass('active').siblings().removeClass('active')    
               });
           });