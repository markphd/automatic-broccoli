(function(){
	var tabsContainer = document.getElementsByClassName('tabs')[0];
	// var tabsNavigation = document.getElementsByClassName('tabs-navigation')[0];
	var tabsNavigation = tabsContainer.querySelector('.tabs-navigation');
	var tabsContent = tabsNavigation.nextElementSibling;

	//Listen to parent click
	tabsNavigation.addEventListener('click', function (e) {
		if (e.target.tagName.toLowerCase() === 'a') {
			updateTabs(e, tabsNavigation, tabsContent);
		};
	});

	function updateTabs (e, navigation, content) {

		var queryVal = 'li' + e.target.hash;
		e.preventDefault();
		// Tab navigation
		navigation.querySelector('a.selected').classList.remove('selected');
		e.target.classList.add('selected');
		// Tab content 
		content.querySelector('li.selected').classList.remove('selected');
		content.querySelector(queryVal).classList.add('selected');

		return queryVal;
	}
})();