  <nav>
    <div class="nav-wrapper">
      <a href="/" class="brand-logo">Mini</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li class="<?php echo ($page == 'index') ? 'active' : ''; ?>"><a href="/">Index</a></li>
        <li class="<?php echo ($page == 'about') ? 'active' : ''; ?>"><a href="about">About</a></li>
        <li class="<?php echo ($page == 'contact') ? 'active' : ''; ?>"><a href="contact">Contact</a></li>
        <li class="<?php echo ($page == 'task') ? 'active' : ''; ?>"><a href="task">Task</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li class="<?php echo ($page == 'index') ? 'active' : ''; ?>"><a href="/">Index</a></li>
        <li class="<?php echo ($page == 'about') ? 'active' : ''; ?>"><a href="about">About</a></li>
        <li class="<?php echo ($page == 'contact') ? 'active' : ''; ?>"><a href="contact">Contact</a></li>
        <li class="<?php echo ($page == 'task') ? 'active' : ''; ?>"><a href="task">Task</a></li>
      </ul>
    </div>
  </nav>