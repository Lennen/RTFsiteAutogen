<?php $header = include 'header.php'; 
echo $header; ?>


<body>

  <script defer>
    (function(i, s, o, g, r, a, m) {
      i['GoogleAnalyticsObject'] = r;
      i[r] = i[r] || function() {
        (i[r].q = i[r].q || []).push(arguments)
      }, i[r].l = 1 * new Date();
      a = s.createElement(o),
        m = s.getElementsByTagName(o)[0];
      a.async = 1;
      a.src = g;
      m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-4481610-59', 'auto');
    ga('send', 'pageview');
  </script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/d3-selection/1.2.0/d3-selection.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/britecharts@2.10.0/dist/umd/donut.min.js" type="text/javascript"></script>
  <script src="https://cdn.jsdelivr.net/npm/britecharts@2.10.0/dist/umd/legend.min.js" type="text/javascript"></script>



  <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0 text-center" href="/">
      <img src="/assets/logo.png" style="height:30px;" /> 
    </a>

    <ul class="navbar-nav px-3">
      <li class="nav-item text-nowrap">
        <a class="nav-link" href="#">Выйти</a>
      </li>
    </ul>
  </nav>

  <div class="container-fluid">
    <div class="row">
      <nav class="col-md-2 d-none d-md-block bg-light sidebar">
        <div class="sidebar-sticky">

          <div class="media text-muted p-3">
            <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32">
              <title>Placeholder</title>
              <rect width="100%" height="100%" fill="#007bff"></rect><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text>
            </svg>
            <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
              <strong class="d-block text-gray-dark">Илья Варламов</strong>
              HR-специалист
            </p>
          </div>


          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="home"></span>
                Главная
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#">
                <span data-feather="file"></span>
                Инструкции <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="shopping-cart"></span>
                База резюме
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="users"></span>
                Кандидаты
              </a>
            </li>
          </ul>

          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Прочее</span>
            <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
              <span data-feather="plus-circle"></span>
            </a>
          </h6>
          <ul class="nav flex-column mb-2">
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="file-text"></span>
                Настройки
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="file-text"></span>
                Уведомления
              </a>
            </li>
          </ul>
        </div>
      </nav>

      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 mt-5">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Должностная инструкция</h1>
          <div class="btn-toolbar mb-2 mb-md-0">
            1
          </div>
        </div>
        <p>Укажите необходимые данные для автоматической генерации</p>

        <div class="row">
          
          <div class="col-md-6">
            <label>Филиал</label>
            <select class="form-control" id="exampleFormControlSelect1">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
          </div>
          <div class="col-md-6">
            <label>Файл инструкций</label>
            <div class="custom-file mb-3">

              <form action="/newpage.php" method="post" enctype="multipart/form-data">

                <input type="file" class="custom-file-input" name="uploadfile" id="validatedCustomFile" required>
                <label class="custom-file-label" for="validatedCustomFile">Выбрать файл...</label>
                <div class="invalid-feedback">Example invalid custom file feedback</div>
            </div>
          </div>

        </div>

        <input type="submit" class="btn btn-success btn-lg btn-block" value="Сгенерировать">
        </form>

        <h2 class="my-3">Все инструкции</h2>
        <?php
        $dir  = '/home/w/wellink/Main/public_html/page/';
        //$files = scandir($dir);
		$files = array();
		$changeDates = array();
		foreach (scandir($dir) as $key=>$file) $files[$file] = filemtime($file);
		asort($files);
		$files = array_keys($files);
        $files = array_splice($files, 0, -2);
		?>
		
		<?php if (count($files) > 0) : ?>
		<?php foreach ($files as $key=>$file) : ?>
			<?php if ($key == 0) : ?><div class = "currentFile" style = "border: 3px solid #DAA520; width: 200px; padding-left: 20px; border-radius: 10px;"><?php endif ?>
			<?php if ($key != 0) : ?><div class = "currentFile" style = "border: 3px solid #fff; width: 200px; padding-left: 20px"><?php endif ?>
			№<?=$key+1?>: <a target=blank href=/page/<?=$file?>><?=$file?></a><br/>
			</div>
		<?php endforeach ?>
		<?php endif ?>
      


  <?php $footer = include 'footer.php'; 
echo $footer; ?>
