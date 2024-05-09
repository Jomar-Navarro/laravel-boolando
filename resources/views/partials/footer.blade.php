<footer>
    <div class="container d-flex">
      <div>
        <h4>Boolando s.r.l</h4>
        <nav>
          <ul class="d-flex">
            <li><a href="#">Infomazioni legali</a></li>
            <li><a href="#">Normativa sulla privacy</a></li>
            <li><a href="#">Diritto di recesso</a></li>
          </ul>
        </nav>
      </div>

      <div class="social">
        <h4>Trovaci anche su</h4>
        <ul>
          <li><a v-for="(item, index) in socialMenu" :key="`s-${index}`" :href="`${item.link}`" v-html="`${item.title}`"></a></li>
        </ul>
      </div>
    </div>
  </footer>
