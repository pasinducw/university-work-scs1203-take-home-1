<?php
$this->load->view('templates/header');
$this->load->view('templates/navbar');
?>
<div class="container-fluid">
  <div class="row">
    <?php $this->load->view('templates/navigation', array("navEntries" => $navigationData));?>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <?php $this->load->view($view, $viewData);?>
    </main>
  </div>
</div>

<?php $this->load->view('templates/footer');
