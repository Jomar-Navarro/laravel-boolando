  <header>
    <div class="container d-flex ">
      <nav class="menu d-flex ">
        <ul class="d-flex">
          <li v-for="(item, index) in mainMenu" :key="`m-${index}`"><a :href="item.link">{{ item.title }}</a>
          </li>
        </ul>
      </nav>

      <div class="logo d-flex ">
        <img src="/src/assets/img/boolean-logo.png" alt="logo">
      </div>

      <div class="icons">
        <ul>
            <li><a href=""><i class="fa-brands fa-x-twitter"></i></a></li>
            <li><a href=""><i class="fa-brands fa-x-twitter"></i></a></li>
            <li><a href=""><i class="fa-brands fa-x-twitter"></i></a></li>
            <li><a href=""><i class="fa-brands fa-x-twitter"></i></a></li>
        </ul>

      </div>
    </div>
  </header>
