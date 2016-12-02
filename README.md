# ПЛАГИН «MYADS» CMF COTONTI

<p>Myads&nbsp;- &nbsp;плагин под Cotonti ,&nbsp;предназначенный для вывода рекламы (<em>баннеры, тизеры и тд</em>) как в любом месте шаблона ( <em>в .tpl файлах</em> ), так и непосредственно в теле статьи.&nbsp;</p>

<p>Вывод рекламных блоков происходит с помощью специальных тегов, которые нужно добавить в шаблон ( р<em>аботает глобально в любых файлах&nbsp;</em>), или прямо в тело статьи ( <em>это другие теги, действуют только для страниц модуля pages&nbsp;</em>).</p>

Myads -  плагин под Cotonti , предназначенный для вывода рекламы (баннеры, тизеры и тд) как в любом месте шаблона ( в .tpl файлах ), так и непосредственно в теле статьи. 

Вывод рекламных блоков происходит с помощью специальных тегов, которые нужно добавить в шаблон ( работает глобально в любых файлах ), или прямо в тело статьи ( это другие теги, действуют только для страниц модуля pages ).

Вывод рекламных блоков внутри контента

Показ рекламы внутри контента могут включать только пользователи, ID которых указан в специальном поле. Эти возможности настраиваются в админпанели, пункт конфигурация плагина.

Внешние скрипты можно подключить в соответствующее поле. Есть поле для вывода в верхней части, и есть другое поле для вывода в нижней части шаблона. 

Разрешенные ID пользователей смогут публиковать специальный тег в теле статьи,  остальные ничего опубликовать не смогут, даже вставив тег, они получат пустое место, так как происходит проверка методом парсинга, и блоки показываются только при условии что их опубликовал доверенный ID ( проверяется условием ).

Описание к каждому блоку

Описание к каждому блоку можно делать с помощью специального поля , в которое добавляете пометку, каждую последующую через запятую. Пометка появится под соответствующим блоком окрашенная цветом. Разделителем служит запятая.

Таким образом, пока вы пишете первое описание, оно будет относиться к первому блоку, как только будет первая запятая, весь текст идущий после будет относиться ко второму блоку, и так для остальных.

Установка плагина Myads

Скачать и распаковать содержимое архива, скопировать файлы в папку plugins.
Установить через панель: (Управление сайтом / Расширения / Myads).
Добавить тег {HEADER_MYADS} в header.tpl, проверить наличие {FOOTER_RC} в footer.tpl
Остальные теги по желанию
Вставка рекламных блоков в CKEditor по клику

При желании можно добавить кнопки вставки тегов рекламных блоков прямо в визуальный редактор CKEditor. Описания которые вы добавите в настройках ( пометки ) для каждого блока будут подставляться автоматически в title, поэтому при наведении на кнопку вставки в редактор будет всплывать подсказка с описанием вставляемого блока.

                <!-- IF {PHP|myads_usersdone} == 'myads_done' AND {PHP.cfg.parser} == 'html' AND {PHP.cfg.plugin.html.editor} == 'ckeditor' -->
                      <div>   
                        <script>
                            function InsertBanner(banner) {
                            var editor = CKEDITOR.instances['rpagetext'];
                            if ( editor.mode == 'wysiwyg' )
                            {editor.insertHtml('[SCEBANNER'+banner+']' );}
                            else alert( '{PHP.L.myads_visy}' );}
                        </script>
                            <a href="javascript:InsertBanner('1')" class="btn" title="{PHP.cdesc.0}">{PHP.L.myads_advblock} 1</a>
                            <a href="javascript:InsertBanner('2')" class="btn" title="{PHP.cdesc.1}">{PHP.L.myads_advblock} 2</a>
                            <a href="javascript:InsertBanner('3')" class="btn" title="{PHP.cdesc.2}">{PHP.L.myads_advblock} 3</a>
                            <a href="javascript:InsertBanner('4')" class="btn" title="{PHP.cdesc.3}">{PHP.L.myads_advblock} 4</a>
                            <a href="javascript:InsertBanner('5')" class="btn" title="{PHP.cdesc.4}">{PHP.L.myads_advblock} 5</a>
                      </div>
                <!-- ENDIF -->

Copyright (C) 2014 - today: WebRomen | https://github.com/WebRomen/myads