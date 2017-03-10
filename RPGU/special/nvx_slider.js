function TrimHeightFor(blockclassname)
	{
		var blocks = document.getElementsByClassName(blockclassname);
		//вычисляем максимальную высоту табов
		if (blocks!=null)
		{
			if (blocks.length>0)
			{
				var elems = blocks[0].getElementsByClassName("tab");
				if (elems!=null)
				{
				var c = elems.length;
				if (c>0)
				{
					var max = 0;
					for (var i=0;i<c;i++){
						max = Math.max(max,elems[i].offsetHeight);
					}
					max=max-20;
					//Выставляем всем табам одну высоту
					for (var i=0;i<c;i++){
						elems[i].setAttribute("style","height:"+max+"px");
					}
					//приподнимаем весь блок с табами
					max=max+28+40;
					blocks[0].setAttribute("style","height:"+max+"px");
					//приподнимаем переключатели
					max=max-40;
					elems = blocks[0].getElementsByTagName("label");
					for (var i=0;i<c;i++){
						elems[i].setAttribute("style","top:"+max+"px");
					}
					}
				}
			}
		}
	}
function ClearHeightFor(blockclassname)
	{
		var blocks = document.getElementsByClassName(blockclassname);
		if (blocks!=null)
		{
			if (blocks.length>0)
			{
				//вычисляем максимальную высоту табов
				var elems = blocks[0].getElementsByClassName("tab");
				if (elems!=null)
				{
					var c = elems.length;
					if (c>0)
					{
						for (var i=0;i<c;i++){
							elems[i].setAttribute("style","height:auto");
						}
						//
						blocks[0].setAttribute("style","height:auto");
					}
				}
			}
		}		
	}	;
