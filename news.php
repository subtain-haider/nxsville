<?php include 'header.php'; ?>

<div id="popup-search-box">
    <div class="box-inner-wrap d-flex align-items-center">
        <form id="form" action="#" method="get" role="search">
            <input id="popup-search" type="text" name="s" placeholder="Type keywords here...">
        </form>
        <div class="search-close"><i class="fa-sharp fa-regular fa-xmark"></i></div>
    </div>
</div>

<?php
// Sample Blog Data
$blogs = [
    [
        'id' => 1,
        'title' => 'NexusVille Achieves Prestigious ISO 9001, ISO 20000, and ISO 27001 Certifications.',
        'intro' => 'Dubai, Date – NexusVille, a leading provider of innovative technology solutions, proudly announces its recent achievement of three internationally recognized certifications—ISO 9001, ISO 20000, and ISO 27001. These certifications demonstrate NexusVille commitment to quality management, IT service excellence, and information security.',
        'content' => '<strong>ISO 9001: Quality Management System :</strong>  ISO 9001 certifies that NexusVille has implemented a robust Quality Management System (QMS) that ensures consistent delivery of high-quality products and services. This certification underscores the company’s dedication to customer satisfaction, continual improvement, and operational efficiency. <br> <br>
        <strong> ISO 20000: IT Service Management : </strong> 
      The ISO 20000 certification highlights NexusVille’s ability to design, deliver, and manage IT services effectively. It affirms the company’s structured approach to service management, ensuring reliability, scalability, and responsiveness to client needs. <br>
       <strong><br> ISO 27001: Information Security Management: </strong>  Achieving ISO 27001 demonstrates NexusVille’s strong focus on data security and risk management. This certification validates the implementation of comprehensive security controls to protect sensitive information and mitigate cybersecurity threats. <br>
       <strong> <br>A Milestone in Excellence and Trust  </strong>Achieving these certifications is a testament to our relentless pursuit of excellence and our commitment to delivering secure, high-quality, and reliable services,” said [CEO Name], CEO of NexusVille. “We are proud of our team’s hard work and dedication, which have enabled us to reach this significant milestone. <br>
      <br>  <strong>About NexusVille : </strong> NexusVille is a leading provider of cutting-edge technology solutions, specializing in information technology, smart services, machine learning, and application development. With a focus on innovation and quality, NexusVille delivers customized solutions to meet the unique needs of its clients across various industries. <br>
     <strong> <br> Contact Information:</strong> NexusVille
       <br> <strong> Email:</strong> info@nxsville.com <br>',

    ],
];

// Get Blog ID from URL (default to first blog)
$blogId = isset($_GET['id']) ? intval($_GET['id']) : 1;

// Find Blog Data
$blog = array_filter($blogs, fn($b) => $b['id'] === $blogId);
$blog = reset($blog);
?>

<!-- <section class="page-header pt-120 pb-120" data-background="assets/img/images/iso-image.jpg"
    <div class="container">
        <div class="page-header-content text-center">
            <h1 class="title"><?= $blog['title'] ?></h1>
            <h4 class="sub-title"><a href="index.php">Home </a><span>></span><a href="blog-details.php?id=<?= $blog['id'] ?>" class="inner-page"><?= $blog['title'] ?></a></h4>
        </div>
    </div>
</section> -->
<!-- ./ page-header -->

<section class="blog-details pt-4 ">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-lg-8">
                <div class="blog-details-content md-pb-30">
                    <div class="blog-details-img mb-20">
                        <!-- <img src="assets/img/images/iso-image.jpeg" alt="post"> -->
                    </div>
                    <div class="d-flex mb-2">
                        <img src="assets/img/images/cert-1.png" height="315" alt="post">
                        <img src="assets/img/images/cert-2.png" height="315" alt="post">
                        <img src="assets/img/images/cert-3.png" height="315" alt="post">
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="blog-details-content md-pb-30">
                    <div class="blog-title-content">
                        <h2 class="details-title"><?= $blog['title'] ?></h2>
                        <p class="mb-30"><?= $blog['intro'] ?></p>
                        <p><?= $blog['content'] ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cta-section pt-120 ">
    <div class="cta-shape"><img src="assets/img/shapes/cta-shape.png" alt="cta"></div>
    <div class="container">
        <div class="cta-wrap">
            <h2 class="title">Fastest & Secure Way to Get Transport Your Freight.</h2>
            <a href="#" class="lt-primary-btn cta-btn">Contact Us</a>
        </div>
    </div>
</section>
<?php include 'footer.php'; ?>