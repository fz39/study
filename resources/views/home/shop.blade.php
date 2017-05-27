<!DOCTYPE HTML>
<html>
<head>
    @include('components.head')
    @include('components.top')
<title>Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/form.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Exo+2' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery1.min.js"></script>
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<!--start slider -->
    <link rel="stylesheet" href="css/fwslider.css" media="all">
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/css3-mediaqueries.js"></script>
    <script src="js/fwslider.js"></script>
<!--end slider -->
<script src="js/jquery.easydropdown.js"></script>
</head>

    <!--/slider -->
<div class="main">
	<div class="wrap">
		<div class="section group">
		  <div class="cont span_2_of_3">
		  	<h2 class="head">Featured Products</h2>
			<div class="top-box">
             <?php foreach($res as $k =>$v){;?>
			 <div class="col_1_of_3 span_1_of_3"> 

				<div class="inner_content clearfix"> <a href="single.html">
					<div class="product_image">
						<img src="/<?=$v->goods_img;?>" alt="" width="200" height="270"/>
					</div>
                    <div class="sale-box"><span class="on_sale title_shop">New</span></div>	
                    <div class="price">
					   <div class="cart-left">
							<p class="title">Lorem Ipsum simply</p>
							<div class="price1">
							  <span class="actual">$12.00</span>
							</div>
               </a>
						</div>
                 <a href="javascript:void(0)" class="shopcar" value="<?=$v->goods_id;?>"><div class="cart-right"> </div></a>
						<div class="clear"></div>
					 </div>				
                   </div>

				</div>
                <?php };?>
<!--			   <div class="col_1_of_3 span_1_of_3">-->
<!--			   	 <a href="single.html">-->
<!--					<div class="inner_content clearfix">-->
<!--					<div class="product_image">-->
<!--						<img src="images/pic1.jpg" alt=""/>-->
<!--					</div>-->
<!--                    <div class="price">-->
<!--					   <div class="cart-left">-->
<!--							<p class="title">Lorem Ipsum simply</p>-->
<!--							<div class="price1">-->
<!--							  <span class="actual">$12.00</span>-->
<!--							</div>-->
<!--						</div>-->
<!--						<div class="cart-right"> </div>-->
<!--						<div class="clear"></div>-->
<!--					 </div>				-->
<!--                   </div>-->
<!--                   </a>-->
<!--				</div>-->
<!--				<div class="col_1_of_3 span_1_of_3">-->
<!--				 <a href="single.html">-->
<!--				  <div class="inner_content clearfix">-->
<!--					<div class="product_image">-->
<!--						<img src="images/pic2.jpg" alt=""/>-->
<!--					</div>-->
<!--                    <div class="sale-box1"><span class="on_sale title_shop">Sale</span></div>	-->
<!--                    <div class="price">-->
<!--					   <div class="cart-left">-->
<!--							<p class="title">Lorem Ipsum simply</p>-->
<!--							<div class="price1">-->
<!--							  <span class="reducedfrom">$66.00</span>-->
<!--							  <span class="actual">$12.00</span>-->
<!--							</div>-->
<!--						</div>-->
<!--						<div class="cart-right"> </div>-->
<!--						<div class="clear"></div>-->
<!--					 </div>				-->
<!--                   </div>-->
<!--                   </a>-->
<!--				</div>-->
<!--				<div class="clear"></div>-->
<!--			</div>	-->
<!--			<div class="top-box">-->
<!--			  <div class="col_1_of_3 span_1_of_3">-->
<!--			  	 <a href="single.html">-->
<!--				 <div class="inner_content clearfix">-->
<!--					<div class="product_image">-->
<!--						<img src="images/pic3.jpg" alt=""/>-->
<!--					</div>-->
<!--                    <div class="price">-->
<!--					   <div class="cart-left">-->
<!--							<p class="title">Lorem Ipsum simply</p>-->
<!--							<div class="price1">-->
<!--							  <span class="actual">$12.00</span>-->
<!--							</div>-->
<!--						</div>-->
<!--						<div class="cart-right"> </div>-->
<!--						<div class="clear"></div>-->
<!--					 </div>				-->
<!--                   </div>-->
<!--                   </a>-->
<!--				</div>-->
<!--				<div class="col_1_of_3 span_1_of_3">-->
<!--					<a href="single.html">-->
<!--					<div class="inner_content clearfix">-->
<!--					<div class="product_image">-->
<!--						<img src="images/pic4.jpg" alt=""/>-->
<!--					</div>-->
<!--					 <div class="sale-box"><span class="on_sale title_shop">New</span></div>	-->
<!--                    <div class="price">-->
<!--					   <div class="cart-left">-->
<!--							<p class="title">Lorem Ipsum simply</p>-->
<!--							<div class="price1">-->
<!--							  <span class="actual">$12.00</span>-->
<!--							</div>-->
<!--						</div>-->
<!--						<div class="cart-right"> </div>-->
<!--						<div class="clear"></div>-->
<!--					 </div>				-->
<!--                   </div>-->
<!--                   </a>-->
<!--				</div>-->
<!--				<div class="col_1_of_3 span_1_of_3">-->
<!--				 <a href="single.html">-->
<!--				 <div class="inner_content clearfix">-->
<!--					<div class="product_image">-->
<!--						<img src="images/pic5.jpg" alt=""/>-->
<!--					</div>-->
<!--                    <div class="price">-->
<!--					   <div class="cart-left">-->
<!--							<p class="title">Lorem Ipsum simply</p>-->
<!--							<div class="price1">-->
<!--							  <span class="actual">$12.00</span>-->
<!--							</div>-->
<!--						</div>-->
<!--						<div class="cart-right"> </div>-->
<!--						<div class="clear"></div>-->
<!--					 </div>				-->
<!--                   </div>-->
<!--                 </a>-->
<!--				</div>-->
<!--				<div class="clear"></div>-->
<!--			</div>	-->
<!--			<div class="top-box1">-->
<!--			  <div class="col_1_of_3 span_1_of_3">-->
<!--			  	 <a href="single.html">-->
<!--				 <div class="inner_content clearfix">-->
<!--					<div class="product_image">-->
<!--						<img src="/admin/uploads/3b38bce2ec3802f49b3d9203db54c623.jpg" alt="" height="250"/>-->
<!--					</div>-->
<!--                     <div class="sale-box"><span class="on_sale title_shop">New</span></div>	-->
<!--                    <div class="price">-->
<!--					   <div class="cart-left">-->
<!--							<p class="title">Lorem Ipsum simply</p>-->
<!--							<div class="price1">-->
<!--							  <span class="actual">$12.00</span>-->
<!--							</div>-->
<!--						</div>-->
<!--						<div class="cart-right"> </div>-->
<!--						<div class="clear"></div>-->
<!--					 </div>				-->
<!--                   </div>-->
<!--                   </a>-->
<!--				</div>-->
<!--				<div class="col_1_of_3 span_1_of_3">-->
<!--				 <a href="single.html">-->
<!--					<div class="inner_content clearfix">-->
<!--					<div class="product_image">-->
<!--						<img src="images/pic7.jpg" alt=""/>-->
<!--					</div>-->
<!--					 <div class="sale-box1"><span class="on_sale title_shop">Sale</span></div>	-->
<!--                    <div class="price">-->
<!--					   <div class="cart-left">-->
<!--							<p class="title">Lorem Ipsum simply</p>-->
<!--							<div class="price1">-->
<!--							  <span class="reducedfrom">$66.00</span>-->
<!--							  <span class="actual">$12.00</span>-->
<!--							</div>-->
<!--						</div>-->
<!--						<div class="cart-right"> </div>-->
<!--						<div class="clear"></div>-->
<!--					 </div>				-->
<!--                   </div>-->
<!--                   </a>-->
<!--				</div>-->
<!--				<div class="col_1_of_3 span_1_of_3">-->
<!--				  <a href="single.html">-->
<!--				 <div class="inner_content clearfix">-->
<!--					<div class="product_image">-->
<!--						<img src="images/pic8.jpg" alt=""/>-->
<!--					</div>-->
<!--                   	 <div class="sale-box"><span class="on_sale title_shop">New</span></div>	-->
<!--                    <div class="price">-->
<!--					   <div class="cart-left">-->
<!--							<p class="title">Lorem Ipsum simply</p>-->
<!--							<div class="price1">-->
<!--							  <span class="actual">$12.00</span>-->
<!--							</div>-->
<!--						</div>-->
<!--						<div class="cart-right"> </div>-->
<!--						<div class="clear"></div>-->
<!--					 </div>				-->
<!--                   </div>-->
<!--                   </a>-->
<!--				</div>-->
<!--				<div class="clear"></div>-->
<!--			</div>	-->
<!--		  <h2 class="head">Staff Pick</h2>-->
<!--		  <div class="top-box1">-->
<!--			  <div class="col_1_of_3 span_1_of_3">-->
<!--			  	 <a href="single.html">-->
<!--				 <div class="inner_content clearfix">-->
<!--					<div class="product_image">-->
<!--						<img src="images/pic8.jpg" alt=""/>-->
<!--					</div>-->
<!--                     <div class="sale-box"><span class="on_sale title_shop">New</span></div>	-->
<!--                    <div class="price">-->
<!--					   <div class="cart-left">-->
<!--							<p class="title">Lorem Ipsum simply</p>-->
<!--							<div class="price1">-->
<!--							  <span class="actual">$12.00</span>-->
<!--							</div>-->
<!--						</div>-->
<!--						<div class="cart-right"> </div>-->
<!--						<div class="clear"></div>-->
<!--					 </div>				-->
<!--                   </div>-->
<!--                   </a>-->
<!--				</div>-->
<!--				<div class="col_1_of_3 span_1_of_3">-->
<!--					 <a href="single.html">-->
<!--					<div class="inner_content clearfix">-->
<!--					<div class="product_image">-->
<!--						<img src="images/pic4.jpg" alt=""/>-->
<!--					</div>-->
<!--				    <div class="price">-->
<!--					   <div class="cart-left">-->
<!--							<p class="title">Lorem Ipsum simply</p>-->
<!--							<div class="price1">-->
<!--							  <span class="actual">$12.00</span>-->
<!--							</div>-->
<!--						</div>-->
<!--						<div class="cart-right"> </div>-->
<!--						<div class="clear"></div>-->
<!--					 </div>				-->
<!--                   </div>-->
<!--                   </a>-->
<!--				</div>-->
<!--				<div class="col_1_of_3 span_1_of_3">-->
<!--				 <a href="single.html">-->
<!--				 <div class="inner_content clearfix">-->
<!--					<div class="product_image">-->
<!--						<img src="images/pic2.jpg" alt=""/>-->
<!--					</div>-->
<!--                   	 <div class="sale-box"><span class="on_sale title_shop">New</span></div>	-->
<!--                    <div class="price">-->
<!--					   <div class="cart-left">-->
<!--							<p class="title">Lorem Ipsum simply</p>-->
<!--							<div class="price1">-->
<!--							  <span class="actual">$12.00</span>-->
<!--							</div>-->
<!--						</div>-->
<!--						<div class="cart-right"> </div>-->
<!--						<div class="clear"></div>-->
<!--					 </div>				-->
<!--                   </div>-->
<!--                   </a>-->
<!--				</div>-->
<!--				<div class="clear"></div>-->
<!--			</div>	-->
<!--	        <h2 class="head">New Products</h2>	-->
<!--		    <div class="section group">-->
<!--			  <div class="col_1_of_3 span_1_of_3">-->
<!--			  	 <a href="single.html">-->
<!--				 <div class="inner_content clearfix">-->
<!--					<div class="product_image">-->
<!--						<img src="images/pic5.jpg" alt=""/>-->
<!--					</div>-->
<!--                     <div class="sale-box"><span class="on_sale title_shop">New</span></div>	-->
<!--                    <div class="price">-->
<!--					   <div class="cart-left">-->
<!--							<p class="title">Lorem Ipsum simply</p>-->
<!--							<div class="price1">-->
<!--							  <span class="actual">$12.00</span>-->
<!--							</div>-->
<!--						</div>-->
<!--						<div class="cart-right"> </div>-->
<!--						<div class="clear"></div>-->
<!--					 </div>				-->
<!--                   </div>-->
<!--                   </a>-->
<!--				</div>-->
<!--				<div class="col_1_of_3 span_1_of_3">-->
<!--					<a href="single.html">-->
<!--					<div class="inner_content clearfix">-->
<!--					<div class="product_image">-->
<!--						<img src="images/pic2.jpg" alt=""/>-->
<!--					</div>-->
<!--					 <div class="sale-box"><span class="on_sale title_shop">New</span></div>	-->
<!--                    <div class="price">-->
<!--					   <div class="cart-left">-->
<!--							<p class="title">Lorem Ipsum simply</p>-->
<!--							<div class="price1">-->
<!--							  <span class="actual">$12.00</span>-->
<!--							</div>-->
<!--						</div>-->
<!--						<div class="cart-right"> </div>-->
<!--						<div class="clear"></div>-->
<!--					 </div>				-->
<!--                   </div>-->
<!--                   </a>-->
<!--				</div>-->
<!--				<div class="col_1_of_3 span_1_of_3">-->
<!--				 <a href="single.html">-->
<!--				 <div class="inner_content clearfix">-->
<!--					<div class="product_image">-->
<!--						<img src="images/pic3.jpg" alt=""/>-->
<!--					</div>-->
<!--                   	 <div class="sale-box"><span class="on_sale title_shop">New</span></div>-->
<!--                    <div class="price">-->
<!--					   <div class="cart-left">-->
<!--							<p class="title">Lorem Ipsum simply</p>-->
<!--							<div class="price1">-->
<!--							  <span class="actual">$12.00</span>-->
<!--							</div>-->
<!--						</div>-->
<!--						<div class="cart-right"> </div>-->
<!--						<div class="clear"></div>-->
<!--					 </div>-->
<!--                   </div>-->
<!--                   </a>-->
<!--				</div>-->
				<div class="clear"></div>
			</div>
		  </div>
			<div class="rsidebar span_1_of_left">
				<div class="top-border"> </div>
				 <div class="border">
	             <link href="css/default.css" rel="stylesheet" type="text/css" media="all" />
	             <link href="css/nivo-slider.css" rel="stylesheet" type="text/css" media="all" />
				  <script src="js/jquery.nivo.slider.js"></script>
				    <script type="text/javascript">
				    $(window).load(function() {
				        $('#slider').nivoSlider();
				    });
				    </script>
		    <div class="slider-wrapper theme-default">
              <div id="slider" class="nivoSlider">
                <img src="images/t-img1.jpg"  alt="" />
               	<img src="images/t-img2.jpg"  alt="" />
                <img src="images/t-img3.jpg"  alt="" />
              </div>
             </div>
              <div class="btn"><a href="single.html">Check it Out</a></div>
             </div>
           <div class="top-border"> </div>
			<div class="sidebar-bottom">
			    <h2 class="m_1">Newsletters<br> Signup</h2>
			    <p class="m_text">Lorem ipsum dolor sit amet, consectetuer</p>
			    <div class="subscribe">
					 <form>
					    <input name="userName" type="text" class="textbox">
					    <input type="submit" value="Subscribe">
					 </form>
	  			</div>
			</div>
	    </div>
	   <div class="clear"></div>
	</div>
	</div>
	</div>


		<div class="footer-bottom">
			<div class="wrap">
	             <div class="copy">
			        <p>Copyright &copy; 2014.Company name All rights reserved.<a target="_blank" href="http://www.cssmoban.com/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a></p>
		         </div>
				<div class="f-list2">
				 <ul>
					<li class="active"><a href="about.html">About Us</a></li> |
					<li><a href="delivery.html">Delivery & Returns</a></li> |
					<li><a href="delivery.html">Terms & Conditions</a></li> |
					<li><a href="contact.html">Contact Us</a></li> 
				 </ul>
			    </div>
			    <div class="clear"></div>
		      </div>
	     </div>
<meta name="_token" content="{{ csrf_token() }}"/>
	</div>
<div style="display:none"></div>
</body>
<script>
    $(".shopcar").click(function(){
        var goodsid=$(this).attr('value');
        $.ajax({
            type:'POST',
            url:'/home/shopcar',
            data:{
                id:goodsid
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            },
            dataType:'json',
            success:function(data){
                alert(data);
            }
        })
    })
</script>
</html>