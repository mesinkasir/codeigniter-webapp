<img class="img-fluid" width="100%" src="<?php echo $cover; ?>" alt="<?php echo $title; ?>"/>
<div class="py-12 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-12">
    <div class="lg:text-center">
      <h2 class="text-base text-indigo-600 font-semibold tracking-wide uppercase"><a href="<?php echo $url; ?>"><?php echo $title; ?></a></h2>
      <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
      <?php echo $desc; ?>
      </p>
     </div>
     <div class="col-12 p-3 p-md-5"> 
      <p><?php echo $content; ?></p>
      <p><?php echo $content1; ?></p>
      <p><?php echo $content2; ?></p>
      <p><?php echo $content3; ?></p>
      <div class="text-center p-3">
      <a href="<?php echo $link; ?>" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">
        <?php echo $btn; ?>
        </a>
        </div>
    </div>
  
  </div>
</div>