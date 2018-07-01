<nav class="col-md-2 d-none d-md-block bg-dark sidebar">
  <div class="sidebar-sticky">
    <ul class="nav flex-column">
      
    <?php foreach($navEntries as $navEntry){ ?>
      <li class="nav-item">
        <a class="nav-link active" href="<?php echo $navEntry['url']; ?>">
          <span data-feather="<?php echo $navEntry['icon']; ?>"></span>
          <?php echo $navEntry['name']; ?>
          <!-- <span class="sr-only">(current)</span> -->
        </a>
      </li>
      <?php } ?>
    </ul>
  </div>
</nav>