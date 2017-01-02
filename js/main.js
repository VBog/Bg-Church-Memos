// Вывести на экран страницу с печатной формой
function bg_memos_printTab() {
	setTimeout(bg_memos_popup_printTab, 1000);
}
function bg_memos_popup_printTab() {
	bg_memos_saveNames();
	window.open("paper.html","_self");
}


// Загрузка данных в локальное хранилище учетной записи
function bg_memos_saveNames() {
	for (var j=0; j<2; j++) {
		for (var i=0; i<20; i++) {
			var pos = "o"+j+((i<10)?("0"+i):i);
			window.localStorage['p_'+pos]=document.getElementById(pos).value;
		}
	}
}
// Дублировать данные из верхней части формы в нижнюю
function bg_memos_duplicateDown() {
	var k;
	for (var j=0; j<2; j++) {
		for (var i=0; i<10; i++) {
			var pos1 = "o"+j+((i<10)?("0"+i):i);
			window.localStorage['p_'+pos1]=document.getElementById(pos1).value;
			k=i+10;
			var pos2 = "o"+j+((k<10)?("0"+k):k);
			window.localStorage['p_'+pos2]=window.localStorage['p_'+pos1];
			document.getElementById(pos2).value = window.localStorage['p_'+pos2];
		}
	}
}
// Дублировать данные из нижней части формы в верхнюю
function bg_memos_duplicateUp() {
	var k;
	for (var j=0; j<2; j++) {
		for (var i=10; i<20; i++) {
			var pos1 = "o"+j+((i<10)?("0"+i):i);
			window.localStorage['p_'+pos1]=document.getElementById(pos1).value;
			k=i-10;
			var pos2 = "o"+j+((k<10)?("0"+k):k);
			window.localStorage['p_'+pos2]=window.localStorage['p_'+pos1];
			document.getElementById(pos2).value = window.localStorage['p_'+pos2];
		}
	}
}
// Очистить форму и локальное хранилище учетной записи
function bg_memos_clearNames() {
	for (var j=0; j<2; j++) {
		for (var i=0; i<20; i++) {
			var pos = "o"+j+((i<10)?("0"+i):i);
			window.localStorage['p_'+pos] = "";
			document.getElementById(pos).value = "";
		}
	}
}
// Загрузка данных из локального хранилища учетной записи
//  - в форму ввода
function bg_memos_main() {

	for (var j=0; j<2; j++) {
		for (var i=0; i<20; i++) {
			var pos = "o"+j+((i<10)?("0"+i):i);
		// Все значения по умолчанию - пусто. 
			if (localStorage.getItem('p_'+pos) === null){window.localStorage['p_'+pos]="";}
		// Восстановить сохраненные значения.
			document.getElementById(pos).value = window.localStorage['p_'+pos];
		}
	}
}
// - в печатную форму
function bg_memos_load() {
	for (var j=0; j<2; j++) {
		for (var i=0; i<20; i++) {
			var pos = "o"+j+((i<10)?("0"+i):i);
			if (localStorage.getItem('p_'+pos) === null){window.localStorage['p_'+pos]="";}
		// Восстановить сохраненные значения.
			document.getElementById(pos).innerHTML = window.localStorage['p_'+pos];
		}
	}
	window.print();
}

