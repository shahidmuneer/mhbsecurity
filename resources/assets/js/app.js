
import {home} from "./home";
let h=new home()
$(document).ready(()=>{
    h.init_carousal($(".products-carousal"));
            $(".ract a").mPageScroll2id();
   $(".products-carousal .slick-slide").on("click",function(){
       let i=$(this).attr("product");
       $("#myModal .modal-title").html(`
<i class="fa fa-circle-o-notch fa-spin" style="font-size:24px"></i>`);
              $("#myModal .modal-body").html(`<i class="fa fa-circle-o-notch fa-spin" style="font-size:24px"></i>`);
          
        $.ajax({
           url:"/product/get",
           type:"get",
           data:{id:i},
           dataType:"json",
           success:(data)=>{
               
             $("#myModal .modal-title").html(data.product.name);
              $("#myModal .modal-body").html(data.product.details);
          
           },
           error:(error)=>{
               console.log(error);
           }
           
       })
   })
})

