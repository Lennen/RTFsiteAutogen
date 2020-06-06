
<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Пример на bootstrap 4: Базовая панель администратора с фиксированной боковой панелью и навигационной панелью.">

    <title>LOD</title>

    <!-- Bootstrap core CSS -->
<link href="/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

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
    <link href="/dashboard.css" rel="stylesheet">

  </head>

  <body>

<script defer>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-4481610-59', 'auto');
  ga('send', 'pageview');

</script>

<h1 class="p-5">ПРОИЗВОДИТЕЛЬ РАБОТ</h1>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>

<script>

    jQuery($ => {
        const $second = $('.second');

        const now = Date.now();

        const arr = ( $.cookie('timer') || `0.${now}` ).split('.');

        const [s, time] = arr.map(i => parseInt(i, 10));

        let i = s + Math.floor((now - time) / 1000);

        setInterval(() => {
            $second.text(i++);
            $.cookie('timer', `${i}.${Date.now()}`, { expires: 1 }); // перезаписываем куку
        }, 1000);
    });

</script>

<div id="accordion">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Общие положения
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
      1. Производитель работ (прораб) относится к категории руководителей.
2. На должность производителя работ (прораба) назначается лицо, имеющее высшее профессиональное (техническое) образование и стаж работы в строительстве на инженерно-технических должностях не менее 3 лет или среднее профессиональное (техническое) образование и стаж работы в строительстве на инженерно-технических должностях не менее 5 лет.
3. Назначение на должность производителя работ (прораба) и освобождение от нее производится 
приказом		по представлению 	
			

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
 4.10.		.

4.11. Научно-технические достижения и опыт организации строительного производства.
4.12. Основы экономики, организации производства, труда и управления.
4.13. Законодательство о труде.
4.14. Правила внутреннего трудового распорядка.
4.15. Правила и нормы охраны труда, техники безопасности, производственной санитарии и противопожарной защиты.
 4.16.		.


5. Производитель работ (прораб) подчиняется непосредственно 		
		.
	

6. На время отсутствия производителя работ (болезнь, отпуск, командировка, пр.) его обязанности исполняет лицо, назначенное в установленном порядке. Данное лицо приобретает соответствующие права и несет ответственность за надлежащее исполнение возложенных на него обязанностей.
 7.		.

    </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Должностные обязанности
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
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
 22.		.
</div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Права
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
 7.		.
</div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingFour">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          Ответственность
        </button>
      </h5>
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
      <div class="card-body">
      Производитель работ (прораб) несет ответственность:
1. За ненадлежащее исполнение или неисполнение своих должностных обязанностей, предусмотренных настоящей должностной инструкцией - в пределах, определенных действующим трудовым законодательством Российской Федерации.
2. За правонарушения, совершенные в процессе осуществления своей деятельности - в пределах, определенных действующим административным, уголовным и гражданским законодательством Российской Федерации.
3. За причинение материального ущерба - в пределах, определенных действующим трудовым и гражданским законодательством Российской Федерации.
 4.		.
	.
</div>
    </div>
  </div>
</div>

<h4><span class="badge badge-dark m-5 text-center">У Вас ушло <span class="second">0</span> сек на изучение инструкций</span></h4>

<script>$('.collapse').collapse();</script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-1CmrxMRARb6aLqgBO7yyAxTOQE2AKb9GfXnEo760AUcUmFx3ibVJJAzGytlQcNXd" crossorigin="anonymous"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="/dashboard.js"></script>
        <script src="https://getbootstrap.com/docs/4.0/dist/js/bootstrap.min.js"></script>

        <style>
            .card-header {
    padding: .75rem 1.25rem;
    margin-bottom: 0;
    background-color: transparent;
    border-bottom: 1px solid rgba(0,0,0,.125);
    text-transform: uppercase;
}
.btn-link {
    font-weight: 700;
    color: #000000;
    text-decoration: none;
    text-transform: uppercase;
    font-size: 20px;
}
</style>
</body>
</html>