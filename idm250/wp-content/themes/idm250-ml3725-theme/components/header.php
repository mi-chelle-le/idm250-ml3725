<nav class="navbar">
    <div class="navdiv">
    <div class="logo">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>">astro</a>
      <svg width="25" height="26" viewBox="0 0 25 26" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M20.125 11.4962L20.125 11.4962L20.125 11.5039C20.1264 11.682 20.0723 11.8561 19.9702 12.002C19.868 12.1479 19.723 12.2583 19.5552 12.318L19.5518 12.3192L14.0999 14.3018L13.8806 14.3815L13.8009 14.6008L11.8203 20.0487C11.8202 20.0491 11.82 20.0496 11.8199 20.05C11.7576 20.2169 11.6459 20.3608 11.4996 20.4626C11.353 20.5645 11.1787 20.6192 11 20.6192C10.8214 20.6192 10.6471 20.5645 10.5004 20.4626C10.3542 20.3609 10.2425 20.217 10.1803 20.0502C10.1801 20.0497 10.1799 20.0492 10.1797 20.0487L8.19834 14.5949L8.11854 14.3753L7.89884 14.2956L2.45137 12.3203C2.45085 12.3202 2.45032 12.32 2.44979 12.3198C2.28301 12.2575 2.13918 12.1458 2.03751 11.9996L1.63021 12.2829L2.03751 11.9996C1.93552 11.853 1.88086 11.6787 1.88086 11.5C1.88086 11.3214 1.93552 11.1471 2.03751 11.0004C2.13921 10.8542 2.2831 10.7425 2.44996 10.6802C2.45043 10.6801 2.4509 10.6799 2.45137 10.6797L7.90515 8.69834L8.1248 8.61854L8.20446 8.39884L10.1803 2.94974C10.2426 2.78298 10.3543 2.63917 10.5004 2.53751C10.6471 2.43552 10.8214 2.38086 11 2.38086C11.1787 2.38086 11.353 2.43552 11.4996 2.53751L11.7829 2.13021L11.4996 2.53751C11.6458 2.6392 11.7575 2.78308 11.8198 2.94992C11.82 2.9504 11.8202 2.95089 11.8203 2.95137L13.8017 8.40515L13.8815 8.6248L14.1012 8.70446L19.5522 10.681L19.5552 10.6821C19.723 10.7417 19.868 10.8522 19.9702 10.9981C20.0723 11.144 20.1264 11.3181 20.125 11.4962Z" fill="#F2AABE" stroke="#3C3C3C"/>
      <path d="M23.5625 17.9962L23.5624 17.9962L23.5625 18.0039C23.5631 18.0923 23.5363 18.1787 23.4856 18.2511C23.4349 18.3234 23.363 18.3783 23.2797 18.4079L23.2797 18.4078L23.2763 18.4091L19.5591 19.7608L19.3398 19.8406L19.2601 20.0599L17.9101 23.7733C17.9099 23.7737 17.9098 23.7742 17.9096 23.7746C17.8785 23.8578 17.8227 23.9295 17.7497 23.9803C17.6764 24.0313 17.5892 24.0586 17.4999 24.0586C17.4106 24.0586 17.3235 24.0313 17.2501 23.9803L16.9647 24.3907L17.2501 23.9803C17.1772 23.9295 17.1214 23.8578 17.0903 23.7746C17.0901 23.7742 17.0899 23.7738 17.0898 23.7733L15.7392 20.0559L15.6594 19.8362L15.4397 19.7566L11.7267 18.4102C11.7262 18.41 11.7257 18.4099 11.7252 18.4097C11.6421 18.3785 11.5704 18.3228 11.5197 18.2499C11.4687 18.1765 11.4414 18.0894 11.4414 18.0001C11.4414 17.9107 11.4687 17.8236 11.5197 17.7503C11.5705 17.6773 11.6422 17.6216 11.7254 17.5904L15.4441 16.2393L15.6638 16.1595L15.7434 15.9398L17.0903 12.2254C17.1215 12.1422 17.1772 12.0706 17.2501 12.0199C17.3235 11.9689 17.4106 11.9415 17.4999 11.9415C17.5892 11.9415 17.6764 11.9689 17.7497 12.0199C17.8227 12.0706 17.8784 12.1423 17.9096 12.2255C17.9098 12.2259 17.9099 12.2263 17.9101 12.2268L19.2607 15.9442L19.3405 16.1639L19.5602 16.2435L23.2768 17.5912L23.2768 17.5912L23.2797 17.5923C23.363 17.6219 23.4349 17.6767 23.4856 17.7491C23.5363 17.8214 23.5631 17.9078 23.5625 17.9962Z" fill="#9A9FF1" stroke="#3C3C3C"/>
      </svg>
    </div>            
    <?php wp_nav_menu([
    'theme_location' => 'primary'
    ]); ?>
    <div class="hamburger">
      <span class="bar"></span>
      <span class="bar"></span>
      <span class="bar"></span>
    </div>
    </div>
  </nav>