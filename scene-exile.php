<?php include "top.html";?>
<section id="start" class="active">
	<header>
		<h1>Изгнание</h1>
		<h3 class="time">через 10 месяцев</h3>
		<h3 class="view">[комната в мотеле:Элис]</h3>
	</header>
	<p>Элис просыпается на кресле, потягивается и садится. К креслу с одной стороны приставлен стул так, что она огорожена четыремя "стенами": спинкой стула, спинкой кресла и подлокотниками. Она встаёт и огладывается по сторонам.</p>
	<p>Комната выглядит бедно - отель явно из самых дешёвых. Судя по виду из окна - на окраине города. В комнате помимо кресла со стулом: проваленная, заправленная кровать; тумбочка с потрёпанной библией на ней; пустой шкаф без дверцы и спортивная сумка. Видны две двери: одна - на улицу, а вторая, судя по всему, в ванную, откуда сейчас слышен шум воды.</p>
	<menu>
		<a href="#wait" class="action">Подождать</a><br>
		<a href="#getout" class="action">Попробовать вылезти из "кроватки".</a>
	</menu>
</section>
<section id="wait">
	<header>
		<h2 class="action">Подождать</h2>
		<h2 class="view">[ванная, комната]</h2>
	</header>
	<!-- <p>Элис подходит к одному из подлокотников и упирается в него ручками. Затем перебрасывает ногу и садится на него, какое-то время удерживая равновесие. </p> -->
	<p><u>Экран разделяется на 2 части: меньшая - от лица Элис, а большая - вид из ванной.</u></p>
	<p>Мэри заканчивает принимать душ. Душем это можно назвать с большой натяжкой, так как старая лейка совсем забилась, и вода льётся неровной сплошной струёй. <i>В зависимости от рейтинга игры/редакции видны те или иные части её тела (: всё остальное скрывает пар.</i> Это длится несколько секунд, после чего она поворачивается к кранам и, с пронзительным скрипом, выключает воду. Берёт не первой свежести полотенце, вытирает голову, и тело. Одевает бельё и уходит в комнату, где её уже ждёт дочь.</p>
	<p>"Ты уже проснулась, милая!" - Мэри радостно подбегает к вытянувшей ручки дочери, и берёт её на руки. Она разговаривает с ней и ходит по комнате, "Ты у меня такая умница - подождала маму", "Как спалось?", "Будешь кушать?", "Сейчас мамочка сделает тебе покушать".</p>
	<p>Она ложит ребёнка на кровать и копается в сумке. Довольно скоро достаёт оттуда какую-то железку размером с кулак <i>болт или что-то вроде этого</i>, и протягивает её Элис со словами: "А ты пока поиграйся".</p>
	<menu>
		<a href="#training" class="action">Взять игрушку</a><br>
		<a href="#deny" class="action">Отказаться</a>
	</menu>
</section>
<section id="getout">
	<header>
		<h2 class="action">Попробовать вылезти из "кроватки".</h2>
		<h2 class="view">[комната]</h2>
	</header>
	<p>Элис подходит к одному из подлокотников и упирается в него обеими ручками, поднимает одну ножку и перекидывает её через него. Усевшись на подлокотник, она балансирует так пару секунд, после чего падает вниз.</p>
	<p><u>Экран на мгновение темнеет, и обратно светлеет через буро-красные цвета. Слышен громкий стук сердца, и нарастающее постанывание, которое вот-вот перейдёт в крик. Изображение подрагивает и периодически мутнеет от слёз).</u></p>
	<p>Комнату заполняет дым, на стенах проступают обугленные "проплешены". Мебель по углам начинает тлеть и обугливаться. Всё вокруг начинает шататься, дребезжать и подскакивать.</p>
	<p>Из ванной выбегает Мать одетая лишь в нижнее бельё и хватет Элис на руки, крепко прижимая к груди.</p>
	<p>Раздаётся пронзительный крик Элис. Одновременно с ним проплешены на стенах и мебели вспыхивают алым пламенем. Постельное бельё на кровати тут же обволакивает огнём. Комнату заполняет густой чёрный дым.</p>
	<p>"Элис, милая, тише, тише, прошу тебя!" - Мэри сквозь слёзы пытается успокоить дочь.</p>
	<p><u>Интерфейс предлагает пользователю совершать какое-то сложное и продолжительное действие <i>(Перебирать кнопки/зажимать нужные/двигать джойстиком)</i> с целью - успокоиться. Ярость можно определить по силе сердцебиения, дыхания, мощности пламени.</u></p>
	<menu>
		<a href="#fire" class="action">Не справиться с яростью</a><br>
		<a href="#calmdown" class="action">Успокоиться</a>
	</menu>
</section>
<section id="fire">
	<header>
		<h2 class="action">Не справиться с яростью</h2>
		<h2 class="view">[комната]</h2>
	</header>
	<p>Огонь полностью обволакивает стены и расходится уже по полу.</p>
	<p>С потолка за дымом и огнём уже не видно ни стен ни мебели. Рядом с героями падает горящий шкаф, который, ударившись с глухим взрывом о пол, разваливается на куски. Над ним вспыхивает ещё более яркое пламя, достающее до потолка.</p>
	<p>Крик Элис становится всё более истеричным. <u>Мерцание усиливается. Сердебиение загрушает треск огня.</u>. А мать тем временем пытается выбраться из комнаты, не выпуская из рук и крепко прижимая к себе дочку. <u>Вид от первого лица меняется на вид с улицы.</u></p>
	<menu>
		<a href="#explosion" class="view">К виду с улицы</a>
	</menu>
</section>
<section id="explosion">
	<header>
		<h2 class="view">[вид с улицы]</h2>
	</header>
	<p><u>Камера находится на высоте ~5 метров выше уровня окна номера Мэри и Элис, и на расстоянии ~10 метров от отеля. Камера медленно двигается к окнам и чуть в сторону.</u></p>
	<p>Видно как за окном комнаты на втором этаже полыхает пламя. Его замечают и случайные зеваки, которые уже скапливаются на улице перед мотелем. Окна закрыты, но дым всё равно просачивается через щели и тонкими струйками поднимается вверх.</p>
	<p><u>Экран разделяется на две равные части. На одной остаётся предыдущий вид с медленно летящей камерой, а на второй - неподвижный вид на окно с рассстояния в 1-2 метра.</u></p>
	<p>На второй половие экрана видно, как Мэри с Элис на руках пытается спастись от огня и вслепую мечется по комнате. То крыло мотеля, в котором находится Комната, взрывается! Эпицентр взрыва в Комнате, но его сила столь велика, что огнём и ударной волной разносит ещё несколько соседних. <u>Вторую часть экрана полностью закрывает огнём. Камера на первой части резко меняет траекторию и отлетает подальше, чтобы захватить весь взрыв.</u></p>
	<h3>ИГРА ЗАКАНЧИВАЕТСЯ</h3>
</section>
<section id="calmdown">
	<header>
		<h2 class="action">Успокоиться</h2>
		<h2 class="view">[комната]</h2>
	</header>
	<p>Элис успокаивается и постепенно перестаёт плакать. <u>Сердцебиение становится тише, а затем и вовсе неслышным. Экран перестаёт мутнеть от слёз.</u> Огонь на стенах и мебели не просто стихает, а пропадает вовсе, забирая с собой и дым и копоть. Обугленные проплешены на стенах затягиваются. Постельной бельё из обугленных кусочков вырастает заново.</p>
	<p>Мэри тоже успокаивается и с восхищением оглядывается вокруг, наблюдая, как все последствия пожара пропадают, словно затягиваются раны. Она гладит дочку по голове, приговаривая: "Умница, милая. Ты такая умница". Потом, вспомнив вдруг, спрашивает: "Хочешь есть?" и, не дожидаясь ответа: "Сейчас мамочка сделает тебе покушать".</p>
	<p>Она ложит ребёнка на кровать и копается в сумке. Довольно скоро достаёт оттуда какую-то железку размером с кулак <i>болт или что-то вроде этого</i> и протягивает её Элис со словами: "А ты пока поиграйся".</p>
	<menu>
		<a href="#training" class="action">Взять игрушку</a><br>
		<a href="#deny" class="action">Отказаться</a>
	</menu>
</section>
<section id="deny">
	<header>
		<h2 class="action">Отказаться</h2>
		<h2 class="view">[комната:Элис]</h2>
	</header>
	<p><u>Экран разделяется на 2 части. Меньшая - вид из угла комнаты на Элис; Большая - камера следующая за Мэри.</u></p>
	<p>Элис бросает игрушкуна пол. И начинает лениво ползать по кровати в ожидании возвращения матери. За окном какой-то шум.</p>
	<p>Мэри уже возвращается.</p>
	<menu>
		<a href="#mary" class="view">к виду Мэри</a>
	</menu>
</section>
<section id="training">
	<header>
		<h2 class="action">Взять игрушку</h2>
		<h2 class="view">[комната:Элис]</h2>
	</header>
	<p><u>Экран разделяется на 2 части. Большая - вид от лица Элис; Меньшая - камера следующая за Мэри.</u></p>
	<p>Элис берёт в руки игрушку и начинает с ней играть, толкая её, поднимая и бросая. Тут она отталкивает её дальше, чем может дотянуться ручкой. Игрушка лежит какое-то время спокойной, потом плавно взлетает в воздух, подлетает поближе к Элис и зависает, покачиваясь.</p>
	<p><u>Начинается тренировка, которая показывает основные принципы взаимодействия с предметами при помощи способностей. Одни действия заставляют игрушку загореться, другие покрывают её льдом, разрывают на части и т.д.</u></p>
	<p>Игрушка ежесекундно трансформируется, её швыряет по комнате. Элис с радостной улыбкой следит за ней взглядом. За окном какой-то шум.</p>
	<p>Мэри уже возвращается, и Элис перестаёт играться. Игрушка падает на пол.</p>
	<menu>
		<a href="#mary" class="view">к виду Мэри</a>
	</menu>
</section>
<section id="mary">
	<header>
		<h2 class="view">[комната,ванная:Мэри]</h2>
	</header>
	<p>Мэри берёт из сумки бутылочку, пачку детского питания и кипятильник, и идёт в ванную. Там она набирает в кружку из нержавейки воды и опускает туда кипятильник. Пока вода греется она моет руки, бутылочку, раскрывает пачку с питанием.</p>
	<p>За окном слышится какой-то то ли гром, то ли крик. Мэри замерла, вслушиваясь. Постояв так какое-то время, продолжила своё занятие.</p>
	<p>Проверив температуру воды в кружке и убедившись что она подходящая, Мэри выключает кипятильник и убирает его, наливает воду в бутылочку и насыпает туда смесь, закручивает крышку и хорошо взбалтывает, после чего возвращается в комнату к Мэри.</p>
	<menu>
		<a href="#molotov" class="next">раздаётся звук бьющегося стекла</a>
	</menu>
</section>
<section id="molotov">
	<p><u>Вид с камеры следящей за Мэри сменяется видом с улицы. Вид от лица Элис - главный</u></p>
	<header>
		<h2 class="view">[улица]</h2>
	</header>
	<p>На улице собралась большая толпа. Они скандируют: "Антихрист!", "Смерть ведьме!", "Шлюха дьявола" и т.д. Они настроены весьма агрессивно: у кого-то в руках подожжённые факелы, у кого-то вилы, биты и прочее.</p>
	<p>Один из них бросает бутылку с зажигательной смесью прямо в окно к Мэри и Элис.</p>
	<header>
		<h2 class="view">[комната:Элис]</h2>
	</header>
	<p>...раздаётся звук бьющегося стекла. В комнату сквозь разбивающееся окно влетает зажжённый коктейль молотова.</p>
	<p><u>Включается BulletTime и пользователю предлагается QuickTimeEvent для того, чтобы его остановить прежде, чем он врежется в стену рядом с Мэри</u></p>
	<menu>
		<a href="#stop" class="action">остановить бутылку</a><br>
		<a href="#fire2" class="action">не успеть остановить бутылку</a>
	</menu>
</section>
<section id="fire2">
	<header>
		<h2 class="action">не успеть остановить бутылку</h2>
		<h2 class="view">[улица]</h2>
	</header>
	<p>На улице раздаётся ликующий крик. Толпа скандирует ещё громче. Несколько парней зажгли свои коктейли, которые держали в руках, и бросили в окно - почти все попали, и только один разбился о стену, разлив по ней большое пятно огня.</p>
	<p>За коктейлями в ход пошли камни, палки и другие подобные предметы.</p>
	<header>
		<h2 class="view">[комната:Элис]</h2>
	</header>
	<p>Комнату обдало жаром и огнём. Часть смеси из бутылки попала на плечо Мэри - оно тут же вспыхнуло. Стена полностью покрылась огнём, который уже перемещался на близстоящую мебель.</p>
	<p>Через несколько секунд в комнату прилетела следующая бутылка, затем ещё, и ещё одна.</p>
	<p>Дым вперемешку с огнём полностью поглотили мебель стены и воздух.</p>
	<p>Пока Мэри пыталась сбить огонь с плеча, ей в живот прилетел камень, сбив её с ног. Ещё один камень практически в тот же момент попал в Элис.</p>
	<h3>ИГРА ЗАКАНЧИВАЕТСЯ</h3>
</section>
<section id="stop">
	<header>
		<h2 class="action">остановить бутылку</h2>
		<h2 class="view">[комната:Элис]</h2>
	</header>
	<p>Бутылка замирает в воздухе. С улицы доносятся возмущённые и удивлённые возгласы. Мэри замерла, и испуганно смотрит то на бутылку, то на Элис.</p>
	<p><u>QuickTimeEvent: вернуть обратно</u></p>
	<menu>
		<a href="#strikeback" class="action">вернуть обратно</a><br>
		<a href="#nextbottle" class="action">не успеть вернуть обратно</a>
	</menu>
</section>
<section id="nextbottle">
	<header>
		<h2 class="action">не успеть вернуть обратно</h2>
		<h2 class="view">[комната:Элис]</h2>
	</header>
	<p>Тряпка, торчащая из бутылки потухает, и бутылка, обезвреженная, падает на пол.</p>
	<p>В окно влетает ещё один коктейл молотова.</p>
	<p><u>QuickTimeEvent: остановить</u></p>
	<menu>
		<a href="#stop" class="action">остановить бутылку</a><br>
		<a href="#fire2" class="action">не успеть остановить бутылку</a>
	</menu>
</section>
<section id="strikeback">
	<header>
		<h2 class="action">вернуть обратно</h2>
		<h2 class="view">[комната:Элис]</h2>
	</header>
	<p>Бутылка вылетает обратно в окно и взрывается огненным шаром над толпой. Но огонь, вместо того что бы поглотить сам себя и погаснуть, только набирает силу.</p>
	<header>
		<h2 class="view">[улица]</h2>
	</header>
	<p>Несколько секунд - и уже над толпой начинает бушевать пламя. Ещё не касаясь людей, но обжигая стены домов и асфальт в нескольких метрах от толпы.</p>
	<header>
		<h2 class="view">[комната:Элис]</h2>
	</header>
	<p>Мэри подбегает к дочери, становится перед ней на колени, хватает за руки и умоляет остановится.</p>
	<menu>
		<a href="#stopfire" class="action">остановиться</a><br>
		<a href="#firerage" class="action">продолжать</a>
	</menu>
</section>
<section id="stopfire">
	<header>
		<h2 class="action">остановиться</h2>
		<h2 class="view">[улица]</h2>
	</header>
	<p>Огонь понемного стихает. Испуганные люди сбившиеся в кучку где-то по среди улицы боятся пошевелиться, робко оглядываются по сторонам. Вот уже от огня остался только поднимающися к небу чёрный дым.</p>
	<p>Один из заводил пытается подбодрить народ криками: "Видите? Антихрист нас испугался! Не останавливаться! Никакого прощения!"</p>
	<p>Люди понемногу начинают приходить в себя и опять поднимать транспаранты и оружие.</p>
	<header>
		<h2 class="view">[комната:Элис]</h2>
	</header>
	<p>Под крики с улицы Мэри хватает Элис и сумку, и бежит в ванную. Там она открывает единственное маленькое окошко, выбрасывает через него сумку, вылезает сама, и вытаскивает дочь. Они убегают в направлении стоянки на заднем дворе.</p>
	<p><u>Часто экрана с улицей убирается. Остаётся только вид от лица Элис.</u></p>
	<menu>
		<a href="#end" class="next">к машине</a>
	</menu>
</section>
<section id="firerage">
	<header>
		<h2 class="action">продолжать</h2>
		<h2 class="view">[улица]</h2>
	</header>
	<p><u>Часть экрана с видом от лица Элис пропадает.</u></p>
	<p>Пламя всё усиливается. Его языки начинают доставать до людей. А в небе они переплетаются в различные узоры. И в какой-то момент над толпой из огня образуется лик Бафомета.</p>
	<p>Из земли начинают бить столпы пламени, которые вытягиваются в линии, соединяясь образуют огромную огненную пентаграмму, в ловушке которой практически все находяшиеся на улице. Всего паре везунчиков удалось сбежать, прошмыгнув между схлопывающимися стенами огня.</p>
	<p>Лик Бафомета растворяется. Языки пламени, образовавшие его, начинают скручиваться в спираль, в итоге создав огромный огненный вихрь.</p>
	<p><u>Игрок получает управление над огненным смерчем и играет в небольшую аркаду, целью которой является сжечь максимальное количество постоянно убегающих и прячущихся людей. По результатам будут даваться ачивки.</u></p>
	<p>Когда пламя стихает, улица остаётся усеянной обугленными трупами.</p>
	<p><u>вид с улицы сменяется на вид от лица Элис.</u></p>
	<p>Перепуганная, с заплаканными глазами, Мэри обречённо берёт на руки дочь. Хватает сумку, и выходит на улицу. Стараясь не обращать внимание на трупы, она идёт в сторону стоянки на заднем дворе мотеля.</p>
	<menu>
		<a href="#end" class="next">к машине</a>
	</menu>
</section>
<section id="end">
	<header>
		<h2 class="view">[машина:Элис]</h2>
	</header>
	<p>Мэри быстрыми, немного дёргаными движениями закидывает сумку на заднее сидение старого пикапа. Сажает дочь на переднее пассажирское сиденье. Садится за руль.</p>
	<p>- "<i>%place_name%</i>... мы поедем в <i>%place_name%</i>. Там они нас не достанут." - с этими словами Мэри заводит машину и жмёт на газ.</p>
	<h3>СЦЕНА ЗАКАНЧИВАЕТСЯ</h3>
</section>
<?php include "bottom.html";?>