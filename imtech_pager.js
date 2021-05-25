
var Imtech = {};
Imtech.Pager = function() {
    this.paragraphsPerPage = 3;
    this.currentPage = 1;
    this.pagingControlsContainer = '#pagingControls';
    this.pagingContainerPath = '#content';
    // число страниц
    this.numPages = function() {
        var numPages = 0;
        //          ('div.z')                               3
        if (this.paragraphs != null && this.paragraphsPerPage != null) {
        // метод ceil - возвращает наименьшее целое
            numPages = Math.ceil(this.paragraphs.length / this.paragraphsPerPage);
        }
        return numPages;
    };
    
    
    
    
// page - текущая (открытая - номер) страница, то есть в ф-ю передаем номер текущий страницы, контент котор впоследствии выводим
    this.showPage = function(page) {
        this.currentPage = page;
        var html = '';
// slice - Данный метод не изменяет исходный массив, а просто возвращает его часть.
// то есть выводит тот контент, котор соответствует текущей странице
        this.paragraphs.slice((page-1) * this.paragraphsPerPage,
            ((page-1)*this.paragraphsPerPage) + this.paragraphsPerPage).each(function() {
            html += '<div>' + $(this).html() + '</div>';
        });
// вставляем контент
        $(this.pagingContainerPath).html(html);
//                          #pagingControls,  текущая страница(по умолч. 1), общее число страниц     
        renderControls(this.pagingControlsContainer, this.currentPage, this.numPages());
    }
    
    
    
    
// блок с навигацией
    var renderControls = function(container, currentPage, numPages) {
// разметка с навигацией
        var pagingControls = 'Страницы: <ul>';
		pagingControls += '<li><a href="#" onclick="pager.showPage(' + 1 + '); return false;"><<</a></li>';
		if (currentPage-1 > 0){
			pagingControls += '<li><a href="#" onclick="pager.showPage(' + (currentPage-1) + '); return false;"><</a></li>';
		}else pagingControls += '<li><a href="#" onclick="pager.showPage(' + 1 + '); return false;"><</a></li>';
        for (var i = 1; i <= numPages; i++) {
            if (i != currentPage) {
                pagingControls += '<li><a href="#" onclick="pager.showPage(' + i + '); return false;">' + i + '</a></li>';
            } else {
                pagingControls += '<li class="enabled">' + i + '</li>';
            }
        }
		if (currentPage < numPages){
			pagingControls += '<li><a href="#" onclick="pager.showPage(' + (currentPage+1) + '); return false;">></a></li>';
		}
		else pagingControls += '<li><a href="#" onclick="pager.showPage(' + numPages + '); return false;">></a></li>';
		pagingControls += '<li><a href="#" onclick="pager.showPage(' + numPages + '); return false;">>></a></li>';
        pagingControls += '</ul>';

        $(container).html(pagingControls);
    }  
}   