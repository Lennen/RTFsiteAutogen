<!doctype html>
<html lang="ru">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>LOD</title>

  <!-- Bootstrap core CSS -->
  <link href="bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  <!-- Favicons -->
  <link rel="apple-touch-icon" href="/docs/4.5/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
  <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
  <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
  <link rel="manifest" href="/docs/4.5/assets/img/favicons/manifest.json">
  <link rel="mask-icon" href="/docs/4.5/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
  <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon.ico">
  <meta name="msapplication-config" content="/docs/4.5/assets/img/favicons/browserconfig.xml">
  <meta name="theme-color" content="#563d7c">


  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
  <!-- Custom styles for this template -->
  <link href="dashboard.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/britecharts/dist/css/britecharts.min.css" type="text/css" />
</head>

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
              Инженер
            </p>
          </div>


          <ul class="nav flex-column">
            
            <li class="nav-item">
              <a class="nav-link active" href="#">
                <span data-feather="file"></span>
                Инструкции <span class="sr-only">(current)</span>
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
          <h1 class="h2">Инструкция инженера</h1>



          <div class="btn-toolbar mb-2 mb-md-0">
            <h4><span class="badge badge-warning text-center">У Вас ушло <span class="second">0</span> сек на изучение инструкций</span></h4>
          </div>
        </div>
        <label>Ваш прогресс</label>
        <div class="progress mb-3" style="height: 30px;">
          <div class="progress-bar progress-bar-striped bg-success progress-bar-animated" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
        </div>






        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>

        <script>
          jQuery($ => {
            const $second = $('.second');

            const now = Date.now();

            const arr = ($.cookie('timer') || `0.${now}`).split('.');

            const [s, time] = arr.map(i => parseInt(i, 10));

            let i = s + Math.floor((now - time) / 1000);

            setInterval(() => {
              $second.text(i++);
              $.cookie('timer', `${i}.${Date.now()}`, {
                expires: 1
              }); // перезаписываем куку
            }, 1000);
          });
        </script>
        <h2 class="p-3"><span class="badge badge-pill badge-primary">1</span> Должностные инструкции</h2>

        <div id="accordion">
          <div class="card mb-2">
            <div class="card-header" id="headingOne">
              <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  <svg class="bi bi-unlock-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M.5 9a2 2 0 0 1 2-2h7a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-7a2 2 0 0 1-2-2V9z" />
                    <path fill-rule="evenodd" d="M8.5 4a3.5 3.5 0 1 1 7 0v3h-1V4a2.5 2.5 0 0 0-5 0v3h-1V4z" />
                  </svg> Общие положения
                </button>
              </h5>
            </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
              <div class="card-body">

                <table>
                  <!--График 2-->
                  <caption id="blockChart">Опыт работы</caption>
                  </caption>
                  <tr>
                    <td class="bar-container2"></td>
                    <td class="js-chart-legend2"></td>
                  </tr>
                </table>
                <table>

                1. Производитель работ (прораб) относится к категории руководителей.
                2. На должность производителя работ (прораба) назначается лицо, имеющее высшее профессиональное (техническое) образование и стаж работы в строительстве на инженерно-технических должностях не менее 3 лет или среднее профессиональное (техническое) образование и стаж работы в строительстве на инженерно-технических должностях не менее 5 лет.
                3. Назначение на должность производителя работ (прораба) и освобождение от нее производится
                приказом по представлению


                4. Производитель работ (прораб) должен знать:
                4.1. Организационно-распорядительные документы и нормативные материалы вышестоящих и других органов, касающиеся производственно-хозяйственной деятельности участка (объекта).
                4.2. Организацию и технологию строительного производства.
                4.3. Проектно-сметную документацию на строящиеся объекты.
                4.4. Строительные нормы и правила, технические условия на производство и приемку строительно-монтажных и пусконаладочных работ.
                4.5. Формы и методы производственно-хозяйственного деятельности на участке (объекте).
                4.6. Нормы и расценки на выполняемые работы.
                4.7. Законодательные и нормативные правовые акты по оплате труда.
                4.8. Порядок хозяйственных и финансовых взаимоотношений подрядной организации с заказчиками и субподрядчиками.
                4.9. Систему производственно-технологической комплектации и диспетчеризации строительной организации.
                4.10. .

                4.11. Научно-технические достижения и опыт организации строительного производства.
                4.12. Основы экономики, организации производства, труда и управления.
                4.13. Законодательство о труде.
                4.14. Правила внутреннего трудового распорядка.
                4.15. Правила и нормы охраны труда, техники безопасности, производственной санитарии и противопожарной защиты.
                4.16. .


                5. Производитель работ (прораб) подчиняется непосредственно
                .


                6. На время отсутствия производителя работ (болезнь, отпуск, командировка, пр.) его обязанности исполняет лицо, назначенное в установленном порядке. Данное лицо приобретает соответствующие права и несет ответственность за надлежащее исполнение возложенных на него обязанностей.
                7. .

              </div>
            </div>
          </div>
          <div class="card mb-2">
            <div class="card-header" id="headingTwo">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  <svg class="bi bi-lock-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <rect width="11" height="9" x="2.5" y="7" rx="2" />
                    <path fill-rule="evenodd" d="M4.5 4a3.5 3.5 0 1 1 7 0v3h-1V4a2.5 2.5 0 0 0-5 0v3h-1V4z" />
                  </svg> Должностные обязанности
                </button>
              </h5>
            </div>

            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
              <div class="card-body">
			  
			  			                  <!--График 3-->
                  <caption id="blockChart">Перечень рабочих задач</caption>
                  </caption>
                  <tr>
                    <td class="bar-container3"></td>
                    <td class="js-chart-legend3"></td>
                  </tr>
                </table>
                <table>
				
                Производитель работ (прораб):
                1. Осуществляет руководство производственно-хозяйственной деятельностью участка.
                2. Обеспечивает выполнение производственных заданий по вводу объектов в эксплуатацию в установленные сроки и выполнению строительно-монтажных и пусконаладочных работ по всем количественным и качественным показателям с соблюдением проектов производства работ.
                3. Организует производство строительно-монтажных работ в соответствии с проектной документацией, строительными нормами и правилами, техническими условиями и другими нормативными документами.
                4. Обеспечивает соблюдение технологической последовательности производства строительно-монтажных работ на участке.
                5. Осуществляет мероприятия по повышению уровня механизации работ, внедрению новой техники, совершенствованию организации труда, снижению стоимости строительно-монтажных и пусконаладочных работ, экономному расходованию материалов.
                6. Проводит работу по распространению передовых приемов и методов труда.
                7. Обеспечивает получение технической документации на строительство объектов.
                8. Составляет заявки на строительные машины, транспорт, средства механизации, материалы, конструкции, детали, инструмент, инвентарь и обеспечивает их эффективное использование.
                9. Ведет учет выполненных работ, оформляет техническую документацию.
                10. Участвует в сдаче заказчикам законченных строительством объектов, отдельных этапов и комплексов работ по возводимым объектам.
                11. Приготавливает фронт работ для субподрядных (специализированных) организаций и участвует в приемке от них выполненных работ.
                12. Оформляет допуски на право производства работ в охранных зонах.
                13. Устанавливает мастерам производственные задания по объемам строительно-монтажных и пусконаладочных работ, контролирует их выполнение.
                14. Инструктирует рабочих непосредственно на рабочем месте по безопасным методам выполнения работ.
                15. Обеспечивает применение технологической оснастки (лесов, подмостей, защитных приспособлений, креплений стенок котлованов и траншей, подкосов, кондукторов и других устройств), строительных машин, энергетических установок, транспортных средств и средств защиты работающих.
                16. Следит за соблюдением норм переноски тяжестей, чистоты и порядка на рабочих местах, в проходах и на подъездных путях, правильным содержанием и эксплуатацией подкрановых путей, обеспечением рабочих мест знаками безопасности.
                17. Организует приобъектное складское хозяйство и охрану материальных ценностей.
                18. Контролирует состояние техники безопасности и принимает меры к устранению выявленных недостатков, нарушений правил производственной санитарии, соблюдение рабочими инструкций по охране труда.
                19. Обеспечивает соблюдение работниками производственной и трудовой дисциплины, вносит предложения о наложении дисциплинарных взысканий на нарушителей.
                20. Оказывает помощь рационализаторам.
                21. Организует повышение квалификации рабочих и проводит воспитательную работу в коллективе.
                22. .
				
				                  <!--График 4-->
                  <caption id="blockChart">Необходимые Hard Skills</caption>
                  </caption>
                  <tr>
                    <td class="bar-container4"></td>
                    <td class="js-chart-legend4"></td>
                  </tr>
                </table>
                <table>
                  <!--График 5-->
                  <caption id="blockChart">Необходимые Soft Skills</caption>
                  </caption>
                  <tr>
                    <td class="bar-container5"></td>
                    <td class="js-chart-legend5"></td>
                  </tr>
                </table>
				
              </div>
            </div>
          </div>
          <div class="card mb-2">
            <div class="card-header" id="headingThree">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  <svg class="bi bi-lock-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <rect width="11" height="9" x="2.5" y="7" rx="2" />
                    <path fill-rule="evenodd" d="M4.5 4a3.5 3.5 0 1 1 7 0v3h-1V4a2.5 2.5 0 0 0-5 0v3h-1V4z" />
                  </svg> Права
                </button>
              </h5>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
              <div class="card-body">
                Производитель работ (прораб) вправе:
                1. Знакомиться с проектами решений директора организации, касающимися его деятельности.
                2. Вносить на рассмотрение руководства предложения по совершенствованию работы, связанной с предусмотренными настоящей инструкцией обязанностями.
                3. В пределах своей компетенции сообщать своему непосредственному руководителюо всех выявленных в процессе осуществления должностных обязанностей недостатках в деятельности организации (ее структурных подразделениях) и вносить предложения по их устранению.
                4. Осуществлять взаимодействие с руководителями всех (отдельных) структурных подразделений организации.
                5. Подписывать и визировать документы в пределах своей компетенции.
                6. Требовать от директора организации оказания содействия в исполнении своих должностных обязанностей и прав.
                7. .
              </div>
            </div>
          </div>
          <div class="card mb-2">
            <div class="card-header" id="headingFour">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  <svg class="bi bi-lock-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <rect width="11" height="9" x="2.5" y="7" rx="2" />
                    <path fill-rule="evenodd" d="M4.5 4a3.5 3.5 0 1 1 7 0v3h-1V4a2.5 2.5 0 0 0-5 0v3h-1V4z" />
                  </svg> Ответственность
                </button>
              </h5>
            </div>
            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
              <div class="card-body">
                Производитель работ (прораб) несет ответственность:
                1. За ненадлежащее исполнение или неисполнение своих должностных обязанностей, предусмотренных настоящей должностной инструкцией - в пределах, определенных действующим трудовым законодательством Российской Федерации.
                2. За правонарушения, совершенные в процессе осуществления своей деятельности - в пределах, определенных действующим административным, уголовным и гражданским законодательством Российской Федерации.
                3. За причинение материального ущерба - в пределах, определенных действующим трудовым и гражданским законодательством Российской Федерации.
                4. .
                .
              </div>
            </div>
          </div>
        </div>

        <h2 class="p-3"><span class="badge badge-pill badge-primary">2</span> Техника безопасности</h2>

        <script>
          $('.collapse').collapse();
        </script>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script>
          window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>')
        </script>
        <script src="/docs/4.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-1CmrxMRARb6aLqgBO7yyAxTOQE2AKb9GfXnEo760AUcUmFx3ibVJJAzGytlQcNXd" crossorigin="anonymous"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="/dashboard.js"></script>
        <script src="https://getbootstrap.com/docs/4.0/dist/js/bootstrap.min.js"></script>

        <style>
          .card-header {
            padding: .75rem 1.25rem;
            margin-bottom: 0;
            background-color: transparent;
            border-bottom: 1px solid rgba(0, 0, 0, .125);
            text-transform: uppercase;
          }

          .btn-link {
            font-weight: 700;
            color: #000000;
            color: #525050;
            text-decoration: none;
            text-transform: uppercase;
            font-size: 20px;
          }

          .btn-link:hover {
            text-decoration: none;
            color: #525050;
          }

          .badge-primary {
            background: #5351B9;
          }
        </style>

















      </main>
    </div>
  </div>




  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script>
    window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>')
  </script>
  <script src="/docs/4.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-1CmrxMRARb6aLqgBO7yyAxTOQE2AKb9GfXnEo760AUcUmFx3ibVJJAzGytlQcNXd" crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
  <script src="dashboard.js"></script>

  <script>
    // Instantiate bar chart and container
    const barChart2 = britecharts.donut();
    const legend2 = britecharts.legend();
    const container2 = d3.select('.bar-container2');
    const legendContainer2 = d3.select('.js-chart-legend2');

    barData2 = [{
        quantity: 1,
        percentage: 10,
        name: 'От 1 года',
        id: 1
      },
      {
        quantity: 10,
        percentage: 90,
        name: 'Из 10 лет возможного стажа',
        id: 1
      },
    ];
    // Create Dataset with proper shape

    // Configure chart
    var containerWidth = 250;
    barChart2
      .highlightSliceById(1)
      .isAnimated(true)
      .percentageFormat('0.0f')
      .margin({
        left: 100
      })
      .height(containerWidth)
      .width(containerWidth)
      .externalRadius(containerWidth / 2)
      .internalRadius(containerWidth / 3)
      .on('customMouseOver', function(data) {
        legend2.highlight(data.data.id);
      })
      .on('customMouseOut', function() {
        legend2.clearHighlight();
      });

    legend2
      .width(containerWidth * 2)
      .height(containerWidth * 0.8)
      .numberFormat('.0f');

    container2.datum(barData2).call(barChart2);
    legendContainer2.datum(barData2).call(legend2);
  </script>

  <script>
    // Instantiate bar chart and container
    const barChart3 = britecharts.donut();
    const legend3 = britecharts.legend();
    const container3 = d3.select('.bar-container3');
    const legendContainer3 = d3.select('.js-chart-legend3');

    barData3 = [{
        quantity: 1,
        percentage: 10,
        name: 'Заполнение конструкторской документации',
        id: 1
      },
      {
        quantity: 5,
        percentage: 50,
        name: 'Написание кода на C++',
        id: 2
      },
      {
        quantity: 2,
        percentage: 20,
        name: 'Участие в планерках',
        id: 3
      },
      {
        quantity: 1,
        percentage: 20,
        name: 'Поиск новых путей развития компании',
        id: 3
      }
    ];
    // Create Dataset with proper shape

    // Configure chart
    var containerWidth = 250;
    barChart3
      .isAnimated(true)
      .margin({
        left: 100
      })
      .height(containerWidth)
      .width(containerWidth)
      .externalRadius(containerWidth / 2)
      .internalRadius(containerWidth / 3)
      .on('customMouseOver', function(data) {
        legend3.highlight(data.data.id);
      })
      .on('customMouseOut', function() {
        legend3.clearHighlight();
      });

    legend3
      .width(containerWidth * 2)
      .height(containerWidth * 0.8)
      .numberFormat('.0f');

    container3.datum(barData3).call(barChart3);
    legendContainer3.datum(barData3).call(legend3);
  </script>

  <script>
    // Instantiate bar chart and container
    const barChart4 = britecharts.donut();
    const legend4 = britecharts.legend();
    const container4 = d3.select('.bar-container4');
    const legendContainer4 = d3.select('.js-chart-legend4');

    barData4 = [{
        quantity: 20,
        percentage: 20,
        name: 'С++',
        id: 1
      },
      {
        quantity: 30,
        percentage: 30,
        name: 'STM32F407',
        id: 2
      },
      {
        quantity: 30,
        percentage: 30,
        name: 'GitHub',
        id: 2
      },
      {
        quantity: 20,
        percentage: 20,
        name: 'Пайка SMD',
        id: 2
      },
    ];
    // Create Dataset with proper shape

    // Configure chart
    var containerWidth = 250;
    barChart4
      .highlightSliceById(1)
      .isAnimated(true)
      .percentageFormat('0.0f')
      .margin({
        left: 100
      })
      .height(containerWidth)
      .width(containerWidth)
      .externalRadius(containerWidth / 2)
      .internalRadius(containerWidth / 3)
      .on('customMouseOver', function(data) {
        legend4.highlight(data.data.id);
      })
      .on('customMouseOut', function() {
        legend4.clearHighlight();
      });

    legend4
      .width(containerWidth * 2)
      .height(containerWidth * 0.8)
      .numberFormat('.0f');

    container4.datum(barData4).call(barChart4);
    legendContainer4.datum(barData4).call(legend4);
  </script>

  <script>
    // Instantiate bar chart and container
    const barChart5 = britecharts.donut();
    const legend5 = britecharts.legend();
    const container5 = d3.select('.bar-container5');
    const legendContainer5 = d3.select('.js-chart-legend5');

    barData5 = [{
        quantity: 30,
        percentage: 30,
        name: 'Командная работа',
        id: 1
      },
      {
        quantity: 20,
        percentage: 20,
        name: 'Коммуникабельность',
        id: 2
      },
      {
        quantity: 40,
        percentage: 40,
        name: 'Ответственность',
        id: 3
      },
      {
        quantity: 10,
        percentage: 10,
        name: 'Лояльность',
        id: 1
      },
    ];
    // Create Dataset with proper shape

    // Configure chart
    var containerWidth = 250;
    barChart5
      .highlightSliceById(1)
      .isAnimated(true)
      .percentageFormat('0.0f')
      .margin({
        left: 100
      })
      .height(containerWidth)
      .width(containerWidth)
      .externalRadius(containerWidth / 2)
      .internalRadius(containerWidth / 3)
      .on('customMouseOver', function(data) {
        legend5.highlight(data.data.id);
      })
      .on('customMouseOut', function() {
        legend5.clearHighlight();
      });

    legend5
      .width(containerWidth * 2)
      .height(containerWidth * 0.8)
      .numberFormat('.0f');

    container5.datum(barData5).call(barChart5);
    legendContainer5.datum(barData5).call(legend5);
  </script>





      





</body>

</html>