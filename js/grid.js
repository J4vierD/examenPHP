
	definegrid = function() {
		var browserWidth = $(window).width(); 
		if (browserWidth >= 1001) 
		{
            pageUnits = 'px';
            colUnits = 'px';
			pagewidth = 1208;
			columns = 14;
			columnwidth = 64;
			gutterwidth = 24;
			pagetopmargin = 35;
			rowheight = 30;
			gridonload = 'off';
			makehugrid();
		} 
		if (browserWidth <= 768) 
		{
            pageUnits = '%';
            colUnits = '%';
			pagewidth = 94;
			columns = 3;
			columnwidth = 32;
			gutterwidth = 3;
			pagetopmargin = 35;
			rowheight = 30;
			gridonload = 'off';
			makehugrid();
		}
		if (browserWidth <= 600) 
		{
            pageUnits = '%';
            colUnits = '%';
			pagewidth = 96;
			columns = 1;
			columnwidth = 49;
			gutterwidth = 2;
			pagetopmargin = 35;
			rowheight = 30;
			gridonload = 'off';
			makehugrid();
		}
	}
    $(document).ready(function() {
		definegrid();
		setgridonload();
    });    
    
    $(window).resize(function() {
		definegrid();
        setgridonresize();
    });