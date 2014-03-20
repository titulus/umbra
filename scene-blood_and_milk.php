<?php include "top.html";?>
<section id="start" class="active">
	<header>
		<h1>Кровь с молоком</h1>
		<h3 class="view">[комната: протагонист]</h3>
	</header>
	<p><u>Вид от лица младенца-девочки <i>(Элис)</i></u>, которую мать кормит молоком из бутылочки. Это продолжается несколько секунд, пока не прозвучит дверной звонок. Мэри убирает бутылочку, ставит её на стол. Элис начинает хныкать. Мать кладёт её в кроватку на бок <i>(стол с бутылочкой становится виден через решётку кроватки)</i> и идёт открывать дверь.</p>
	<p><u>Экран разделяется на две части наклонной чёрной линией как в комиксах: большая часть – вид  от лица протагониста, меньшая часть – вид из угла прихожей, захватывающий дверь и подходящую к ней мать.</u></p>
	<menu>
		<a href="#bottle" class="view">к виду от лица Элис</a><br/>
		<a href="#hallway" class="view">к виду из угла прихожей</a>
	</menu>
</section>

<section id="bottle">
	<header>
		<h3 class="view">[комната]</h3>
	</header>
	<p>Бутылочка стоит на соседнем столе. Дотянуться до неё конечно не получиться, но она просто-таки приковывает взгляд.</p>
	<menu>
		<a href="#take_a_bottle" class="action">Взять бутылочку</a><br/>
		<a href="#dont_take_a_bottle" class="action">Продолжить лежать</a><br/>

		<a href="#hallway" class="view">к виду из угла прихожей</a>
	</menu>
</section>

<section id="take_a_bottle">
	<header>
		<h3 class="action">Взять бутылочку</h3>
		<h3 class="view">[комната]</h3>
	</header>
	<p>Бутылочка начинает подрагивать, потом покачиваться из стороны в сторону, потом даже пару раз слегка подскакивает и замирает на столе в том же положении что и была.</p>
	<p>Элис начинает хныкать от досады. Мимо двери проходит мужчина.</p>
	<menu>
		<a href="#hallway" class="view">к виду из угла прихожей</a>
	</menu>
</section>

<section id="dont_take_a_bottle">
	<header>
		<h3 class="action">Продолжить лежать</h3>
		<h3 class="view">[комната]</h3>
	</header>
	<p>Элис протягивает ручку в сторону бутылочки, и, естественно, не достаёт. Она начинает хныкать от досады. Мимо двери проходит мужчина.</p>
	<menu>
		<a href="#hallway" class="view">к виду из угла прихожей</a>
	</menu>
</section>

<section id="hallway">
	<header>
		<h3 class="view">[прихожая]</h3>
	</header>
	<p>Звонок трезвонит всё чаще. Мать подходит к двери и смотрит в глазок. По её выражению лица читается, что ей не нравится то, что она увидела. Очевидно, она пытается придумать, как бы избежать открытия дверей и старается вести себя как можно тише. Но ребёнок вдруг начинает плакать, и из-за двери доносится: «Открывай! Мэри, я знаю, что ты там! Я слышал малую.» В дверь начинают стучать.</p>
	<p>Ей ничего не остаётся как открыть. Пьяный мужчина заходит в квартиру. Со словами «Ну заебись, не прошло и три года», он отталкивает её и проходит на кухню. Его путь лежит мимо дверного проёма, откуда открывается вид на комнату с кроваткой.</p>
	<p><u>Экраны меняют соотношение. Теперь Большая часть – вид из кухни <i>(захватывает часть прихожей)</i>. Меньшая часть – всё ещё вид от лица Элис.</u></p>
	<menu>
		<a href="#kitchen" class="view">к виду из кухни</a>
	</menu>
</section>

<section id="kitchen">
	<header>
		<h3 class="view">[кухня]</h3>
	</header>
	<p>Мужчина проходит мимо комнаты с младенцем, не обращая туда никакого внимания. Он проходит на кухню и начинает копаться в ящиках. «В это доме есть хоть какая-нибудь выпивка?»</p>
	<p>«Джек, уходи» - Мать пытается держать себя в руках и не расплакаться перед глазами этого мужчины.</p>
	<p>«Мне нужны деньги. Этот мудак Эдди не отцепиться от меня пока я всё не отдам.» - Он продолжает копаться в  ящиках.</p>
	<p>«У нас ничего нет. Уходи, пожалуйста.» - Её голос становится всё более надрывным. Видно, что ей страшно.</p>
	<p>«Уходи, уходи… Что значит уходи? Папочка вернулся!» - Он уже перевернул большую часть ящиков и полез теперь в холодильник.</p>
	<p>«Умоляю … т-тебя, оста-а-авь … нас в-в-в… покое. У н-нас нет денег…» - Она уже не может сдерживать слёзы.</p>
	<p>«ЛЖИВАЯ СУКА!» - Он бросается в её сторону «По всем каналом крутят, что Мэр дал вам мамашам, грёбаную кучу бабла!»</p>
	<p>Мать убегает из кухни, забегает в комнату с кроваткой, захлопывает дверь и упирается в неё спиной. <u>Часть экрана с видом из кухни заменяется видом из угла комнаты с кроваткой.</u></p>
	<menu>
		<a href="#babyroom" class="view">к виду из комнаты</a>
	</menu>
</section>

<section id="babyroom">
	<header>
		<h3 class="view">[комната: оба&nbsp;вида]</h3>
	</header>
	<p><i>Если было выполненно действие <b>Взять бутылочку</b>: Она видит, как бутылочка парит над кроваткой, а малютка пьёт из неё. Она цепенеет от страха, руки медленно поднимаются к лицу. Она зажимает ими себе рот, что бы не закричать.</i></p>
	<p>«Вот я и подумал навестить мою любимую семью!» - Он легко выбивает дверь ногой. Мать падает на пол. Бутылочка падает на кровать. ГГ начинает натужно плакать.</p>
	<p>Он делает шаг в сторону кроватки: «А вот и моя люби». Путь ему преграждает Мэри: «Не трогай её!»</p>
	<p>«Уйди с дороги сука!» Он замахивается правой рукой.</p>
	<p>Кулак отца уже летит к её челюсти, <u>но включается <i>bullettime</i> и игроку даётся 3 секунды на выполнение действия:</u></p>
	<menu>
		<a href="#stop" class="action">Остановить</a><br/>
		<a href="#dont_stop1" class="action">Смотреть что будет дальше</a>
	</menu>
</section>

<section id="dont_stop1">
	<header>
		<h3 class="action">Смотреть что будет дальше</h3>
		<h3 class="view">[комната: оба&nbsp;вида]</h3>
	</header>
	<p>Отец бьёт Мать по лицу, от чего та падает на пол. У неё разбита губа, из носа хлынула кровь, быстро краснеет переносица. Он поднимает её за воротник И замахивается ещё раз.</p>
	<p><u>Bullettime и варианты действия повторяются.</u></p>
	<menu>
		<a href="#stop" class="action">Остановить</a><br/>
		<a href="#dont_stop2" class="action">Смотреть что будет дальше</a>
	</menu>
</section>

<section id="dont_stop2">
	<header>
		<h3 class="action">Смотреть что будет дальше</h3>
		<h3 class="view">[комната: оба&nbsp;вида]</h3>
	</header>
	<p>Он бьёт её ещё раз, но не даёт упасть, удерживая рукой за ворот. Её лицо - один сплошной кровоподтёк. Кровь из носа размазалась по щекам. Глаза закрыты от боли. Отец замахивается ещё раз.</p>
	<p><u>Bullettime и варианты действия повторяются.</u></p>
	<menu>
		<a href="#stop" class="action">Остановить</a><br/>
		<a href="#dont_stop3" class="action">Смотреть что будет дальше</a>
	</menu>
</section>

<section id="dont_stop3">
	<header>
		<h3 class="action">Смотреть что будет дальше</h3>
		<h3 class="view">[комната: оба&nbsp;вида]</h3>
	</header>
	<p>Он начинает молотить её обеими руками и в конце прикладывает головой об угол кровати.</p>
	<p>Затем встаёт, подходит к кроватке. Его рука закрывает весь экран. Слышен хруст шеи.</p>
	<h3>ИГРА ЗАКАНЧИВАЕТСЯ</h3>
</section>

<section id="stop">
	<header>
		<h3 class="action">Остановить</h3>
		<h3 class="view">[комната: оба&nbsp;вида]</h3>
	</header>
	<p>Кулак останавливается на полпути до лица. Отец удивлённо оглядывается, пытается понять, в чём дело. Вдруг его отбрасывает к стене и поднимает по ней вверх почти под самый потолок.</p>
	<p>Его руки и ноги растягиваются по сторонам. Теперь он может шевелить только головой. Он начинает громко орать матом и спрашивать то Мэри, то Элис, то окружающее пространство «Что происходит!? Что это за чертовщина!?». Он замечает, что ребёнок уже не лежит в кроватке, а взлетел над ней и пристально смотрит прямо на него. Мать истошно кричит и жмётся к стене.</p>
	<p><u>Интерфейс предлагает совершать постоянное повторяющееся действие (крутить джойстик/нажимать на кнопку)</u></p>
	<menu>
		<a href="#continue1" class="action">Продолжить</a><br/>
		<a href="#break1" class="action">Прекратить</a>
	</menu>
</section>

<section id="break1">
	<header>
		<h3 class="action">Прекратить действие</h3>
		<h3 class="view">[комната: оба&nbsp;вида]</h3>
	</header>
	<p>Отец падает на пол, но тут же вскакивает и подбегает к ГГ. Его рука закрывает весь экран. Слышен хруст шеи.</p>
	<h3>ИГРА ЗАКАНЧИВАЕТСЯ</h3>
</section>

<section id="continue1">
	<header>
		<h3 class="action">Продолжить</h3>
		<h3 class="view">[комната: оба&nbsp;вида]</h3>
	</header>
	<p>Одежда на нём начинает рваться и лоскуты расползаются по стене. Кожа на открытых участках тела начинает слазить и так же как лоскуты одежды, расползается по стене.</p>
	<menu>
		<a href="#continue2" class="action">Продолжить</a><br/>
		<a href="#break2" class="action">Прекратить</a>
	</menu>
</section>

<section id="break2">
	<header>
		<h3 class="action">Прекратить действие</h3>
		<h3 class="view">[комната]</h3>
	</header>
	<p>Отец  падает на пол и с диким криком умирает в агонии сжавшись на полу.</p>
	<menu>
		<a href="#end" class="next">дальше</a>
	</menu>
</section>

<section id="continue2">
	<header>
		<h3 class="action">Продолжить</h3>
		<h3 class="view">[комната]</h3>
	</header>
	<p>Вся одежда, кожа, мышцы, сосуды и прочее расползается по стене образуя символ бафомета. На стене остаётся прикованным окровавленный скелет.</p>
	<menu>
		<a href="#end" class="next">дальше</a>
	</menu>
</section>

<section id="end">
	<header>
		<h2>Финал</h2>
		<h3 class="view">[комната]</h3>
	</header>
	<p>Через какое-то время Мать отходит от шока и подбегает к Элис. Она хватает её и крепко обнимает, нашёптывая, что она любит её и они должны бежать.</p>
	<p>Она, не отпуская малютку, кидает бутылочку и ещё какие-то вещи в свою сумку, хватает её, накидывает на себя пальто и выбегает из комнаты.</p>
	<p><u>Экран темнеет.</u></p>
	<h3>Сцена завершена.</h3>
	<menu>
		<a href="scene-exile.php" class="next">далее</a>
	</menu>
<?php include "bottom.html";?>