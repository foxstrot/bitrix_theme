function OpenMenuNode(oThis)
{
	if (oThis.parentNode.className == '')
		oThis.parentNode.className = 'close';
	else if (oThis.parentNode.className == 'active')
		oThis.parentNode.className = 'close active';
	else if (oThis.parentNode.className == 'close')
		oThis.parentNode.className = '';
	else if (oThis.parentNode.className == 'close active')
		oThis.parentNode.className = 'active';
	else 
		oThis.parentNode.className = '';
	return false;
}
