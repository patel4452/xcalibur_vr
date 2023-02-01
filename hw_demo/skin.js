// Garden Gnome Software - Skin
// Pano2VR 6.1.4/17919
// Filename: Superskin.ggsk
// Generated 2020-04-10T12:43:36

function pano2vrSkin(player,base) {
	player.addVariable('vis_website', 2, false);
	player.addVariable('opt_url', 2, false);
	var me=this;
	var skin=this;
	var flag=false;
	var skinKeyPressed = 0;
	this.player=player;
	this.player.skinObj=this;
	this.divSkin=player.divSkin;
	this.ggUserdata=player.userdata;
	this.lastSize={ w: -1,h: -1 };
	var basePath="";
	// auto detect base path
	if (base=='?') {
		var scripts = document.getElementsByTagName('script');
		for(var i=0;i<scripts.length;i++) {
			var src=scripts[i].src;
			if (src.indexOf('skin.js')>=0) {
				var p=src.lastIndexOf('/');
				if (p>=0) {
					basePath=src.substr(0,p+1);
				}
			}
		}
	} else
	if (base) {
		basePath=base;
	}
	this.elementMouseDown=[];
	this.elementMouseOver=[];
	var cssPrefix='';
	var domTransition='transition';
	var domTransform='transform';
	var prefixes='Webkit,Moz,O,ms,Ms'.split(',');
	var i;
	var hs,el,els,elo,ela,elHorScrollFg,elHorScrollBg,elVertScrollFg,elVertScrollBg,elCornerBg;
	if (typeof document.body.style['transform'] == 'undefined') {
		for(var i=0;i<prefixes.length;i++) {
			if (typeof document.body.style[prefixes[i] + 'Transform'] !== 'undefined') {
				cssPrefix='-' + prefixes[i].toLowerCase() + '-';
				domTransition=prefixes[i] + 'Transition';
				domTransform=prefixes[i] + 'Transform';
			}
		}
	}
	
	player.setMargins(0,0,0,0);
	
	this.updateSize=function(startElement) {
		var stack=[];
		stack.push(startElement);
		while(stack.length>0) {
			var e=stack.pop();
			if (e.ggUpdatePosition) {
				e.ggUpdatePosition();
			}
			if (e.hasChildNodes()) {
				for(var i=0;i<e.childNodes.length;i++) {
					stack.push(e.childNodes[i]);
				}
			}
		}
	}
	
	this.callNodeChange=function(startElement) {
		var stack=[];
		stack.push(startElement);
		while(stack.length>0) {
			var e=stack.pop();
			if (e.ggNodeChange) {
				e.ggNodeChange();
			}
			if (e.hasChildNodes()) {
				for(var i=0;i<e.childNodes.length;i++) {
					stack.push(e.childNodes[i]);
				}
			}
		}
	}
	player.addListener('changenode', function() { me.ggUserdata=player.userdata; me.callNodeChange(me.divSkin); });
	
	var parameterToTransform=function(p) {
		var hs='translate(' + p.rx + 'px,' + p.ry + 'px) rotate(' + p.a + 'deg) scale(' + p.sx + ',' + p.sy + ')';
		return hs;
	}
	
	this.findElements=function(id,regex) {
		var r=[];
		var stack=[];
		var pat=new RegExp(id,'');
		stack.push(me.divSkin);
		while(stack.length>0) {
			var e=stack.pop();
			if (regex) {
				if (pat.test(e.ggId)) r.push(e);
			} else {
				if (e.ggId==id) r.push(e);
			}
			if (e.hasChildNodes()) {
				for(var i=0;i<e.childNodes.length;i++) {
					stack.push(e.childNodes[i]);
				}
			}
		}
		return r;
	}
	
	this.preloadImages=function() {
		var preLoadImg=new Image();
		preLoadImg.src=basePath + 'images/button_2__o.png';
	}
	
	this.addSkin=function() {
		var hs='';
		this.ggCurrentTime=new Date().getTime();
		el=me._button_1=document.createElement('div');
		els=me._button_1__img=document.createElement('img');
		els.className='ggskin ggskin_button_1';
		hs='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAZAAAAGQCAYAAACAvzbMAAARa0lEQVR4nO3dMUxcV7oA4H+fKBCLeBTzJCRjwpNckBBp/ZwUtkSkuDEp7QI3lryFnWKryKRKES2rFKlClNq4seTGFHYZ3DiSLeEi6+eVwguFpUfwWELaKXiIRRQUr4BLZu7cGe7cAQYP3ydFSgjcc+fOvec/5/znnBsBAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA'+
			'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADAsfpDp08g7czNp+cj4mpE/CkiBjt8OgCdth4R/4iIx2/vX37V6ZOpdmICyJmbT69GxPcRMdrhUwE4qVYi4s7b+5cfd/pEIk5AADlz8+lgRDyKiE87fCoA74qfIuLa2/uX1zt5Eh0NIHvDVY9CrwOgVSuxG0Q6NqzVsQCy1/P47xA8AIpaiYj/6lRP5N86UegePQ+A9ozGbl3aER0JIHsJ8087UTZAl/l0r049dp3qgXzfoXIBulFH6tRjDyB7ifPR4y4XoIuN7tWtx6oTPZCOdLUAutyx162dCCB/6kCZAN3u2OvWTgQQ25MAHL5jr1s7OY0XgHeYAAJAIQIIAIUIIAAUIoAAUIgAAkAhAggAhQggABQigABQ'+
			'iAACQCECCACFCCAAFCKAAFCIAAJAIQIIAIUIIAAUIoAAUIgAAkAhAggAhQggABQigABQSE+nT+A4nS31xgcj/TH+Xv/+z5Z+24z/Wd2MN5XtwscdH+mP4VJvzXHL/9yON5XtWFxeP/BvB/p+/xo2tnZiaXWzpbKr/z4iMsu8NDaY+5hp5cp2zfU5W+qN4VJvrr9t9fM0K+Oga1ktz3Vtt4xGZbWi6PVJy/osS6ubsbG1U/iY6c9V5NpUS59j9fm1c/6XxgZ3z/WPu+e68a/da3rQ+R7FNTttTkUAGR/pj+lrozF5odTwdxaX12NuoRwLLyu5jnm21Bu3JofjswulppXpxtZOLLysxOyjlcwgNXPjXE3lvri8HlPfvsp1Dll/HxEx/Oef6n5v/qvzuY+ZNvt4JWYfrez/99QnQzF9dbSlYyytbsbCy0rMP1vLFayzys'+
			'j6XI3kua7tltGorFa0+n03Mvv5WN05zDx4HXNPyoWPeWlsMGZunKv52a0ffsn9jFT7/vOxmJoYqvnZB395vv/vWd/F1LevmgaB6WujcX1iqOHzt7G1Ew+fr8Xso5XMoHBQmdPXRlu+zxs5rO/5pOn6IazrE0Ox8M3HTYNHxO7Dcu+LD2P+q/MHtianr43G4ncX4/aV4QNb4gN9PTG1dw63rwy3fP7dYnykP6av7l63mRvnCrfYqXe21JsZwKY+Gcr47fwePl+r+9ntydbv4bOl3rrgMf98rXBLf6CvJxa++Timr442ff4G+nri9pXhePHdxbg+0d61IFtXB5BLY4Mx+/lYy3/zWYNgU33jtmqgrydmbpyL71s8n250+8pwPPnm4xgf6T/4lzlQo0AxPtLf1jXe2NqJ+VQQuTQ2GGdzDl82O7+Hz+qDU173vviwpc81'+
			'0NcT09dGC5dHY13dDMyqrOefr8WPf6/ExtZODPT1xGcflWLyQmm/Rby4vJ7Z8hro64n5r843vHEXl9drutvjI/1xaWywrqW99Fv7492HIX2+TX/314N/b/bxSubPk9ZxuqU4XOqN+a/Ox9S3rw4lB3CSlCvbmfdQ5u/+s3juLdGsdX17cjju3F0ufOy5hXJd7+HW5HDMPHhd+PzKOXKDzY6V7m2VK9sxt1Dev4/GR/pj6pOhmme1yDUo/7PxeQ709dTVBelcYbVuu8cTXRtAJjNyE1ljqgsvKzHQ1xN/u3EuJi+Uasb6q33/+Vhm8Jh7Uo57C+WGN871iaH9IZvF5fW2xqQP0+LyesPPWsRBx0rG06uvYRKUL375oqsSl28q24d6bZtJ3+dLq5s11zhpHBW9vkurm3XH/OxCKXcAyWo8zC0UfwZupYbQsnILyXM2ea'+
			'EUf7txLldCPcvD52sNGwKXxgbr8opJvuU06dohrOoZURHNW9wbWztx5+5yfPCX5w1nMGXlUKbvLsfMg9dNk8IPn6/FxS9fxPTd5bj1wy8tforukTzo6QRsErwp5npqeGj+2VpNa3egr6fhkGxe91IV/nCp98CcYqPzi8jOreSVbsQ1q7AXXlbi4pcvTvVzd9S6NoC0M201LT0TJWJ3hkveByGZDdJNrewikkBdTgXcqYmhlsfV2R0eTFfkyUy3aulWe6t+fFmpu3ezAkNaMoGkWjvJ88N8pjkcXRtAsub8F5n5k5WIPElDUe+aja2dzFZju5XcaZROTi/trWdKN2zGR/rbCtDJVPRq1XnDRrJ6Pu0kz7PyCCZidFbXBpB0cjJJ2rb6IE1+VP8QtDOGy+4QRroX0u4wy2mUTk4nQ01ZFX67ATrrnj9oamy6zHaS5xG7'+
			'nyvde5m5ce5UT4/vtK4NIFmLncZH+mPxu4tx74sP4/rEUK4eSVa3uchCKmqlK5Lhgj3E0yorOf1j1X258Pfae7TddRBJMr1as3UmWT33w0gwZz17MzfOxYu99UV6JMera5/YN5XtmHtSzmydTF7Ynbo7G7s35MNnaw2DQrrHctTT8c6Weluas150aCJrOmTazIPXR/Z5syYejI/0t71dxkkwPtJ/4Mr/+WeNZ/jkkc5BLKTyFA+fr9Us2Bzo64nrE0NtlXlvoVyzrioJEln3SDq4bGzt1AS4omYfrWQOnw2XeuP2leG4fWV4fxp13l0PKK5rA0jEbgX47xmJvGpJMClXtuPO3eXMlnG1o06ED5d6D237hIPKybOK/qgcxvqHk2qgr+fA4NxOoMxKTmflFhZeVmp+b+qT9gLIjy8rMbO3firRaJ1JuseTDnBFvalsx9'+
			'S3r5ruGJE8Q9NXR2PuSbnhVia0r2uHsBJ37i7HdMbMn7QkR2LLg+Pxfx7owtL3aFbOI6I+qBRZRX5QOVnTebN6CIeZN1xa3YzJr3+uWyWf5faV4VzbE1HMqbiqyYKgS2ODMflRqekGiLOfj8Xi8vp+13cj1eI6aoexG28ezVbNVp/LUUmv0+kmeb7Ddnpg6f2oGvUqFpfXo1zZrrnXW11FnpZemZ41NJYeXsvKn7Trzd6IwV8fvN4djn0/e61WxO4z8rcb59pakU+2UxFAEsliwpkHr2N8pD9uTw5nDm9NXxvdv9mWVjdrhiOOei760upmS7t2zn91vtA5dXrVbFbQO6iX+K5o9TtsRfLqgGrpdR/VfnxZqckDtrKKPEvWyvTqobGstSnphYiHaWNrJ+aelGPuSXl/0eT0tfpNFqcmhhruiE1xpyqAVFta3Yw7d5dj'+
			'bqFc18WtrpCzKrVGiUPySwe9ja0dD3cOWbvhZi10TWQlmycvlNqaSZhOpidDY28q23XB47CS53kkC3YfPl/L3D7+0thgvGkjB0S9rs+BHGRpdbOuJV7desnaSLDIltb8LnkBULV0hbbxr/rhs1Z6Wunjd0MSdaCvJ3OY5tLYYMN/sqa15llF3kzWyvRk1lX62Tis5Hmr7txdrit3+D/sdnDYTn0AiWg+NTfzYZkYMt+8DVnTlNMJ36xZSlmLOrNkJXG7ocf4WY7V33lMXigdSTI96w1/nVx02w3f+UnX1UNY4yP98aayfWAL6NL7tS3b6soreVjS3eHZz8di6ttXuVpXSaLR9ie7wSPdk8ja6HJpdbMuAXx9YqjpzsfVZaSlF9a9i9Iru5O3POZR9+a9T4bayoHNPlqpeSbGR/ozz++wK/GBvp44W+rNddy6+yzHaw'+
			'loTdcGkNtXhmPmxrn9DfwaPWhJ5V4tfXP+9cHrulbt+Eh/PPnm48y1I9WSNx0O9PXE+Hv9p3YmSLLrbtakhUZJ3YfP12oqvoG+npj74sO4/cMvmUEkKSNr77J3vTWatbL73kI597qO8ZH+muGv6xPtBZA3e9uSVFfS6e1oDjt5PtDXE0+++TiGS72x8LKSOUyVyFpA/K7fAydRVwaQ6jeQDfT1xL0vPtx/5/ni8vr+TTfZYMZG+sZPgtC9Lz6s+XmydmRxeT0W/l6puUEvvf/7OHRiamLoWN8V0Uyj16BmyTPlt9GxzpZ696dYZg2/TN9dbvhgzy2U6955PT7SHwvffBwLLyv7LwaLiKbTs1uZdZT3mjRrNORZSJjIO207K+/WSnL64bO1mgAyvPf9t7Ogcf7ZWs3nrL72R5E8vz35+yukJy+U4sV3F2PuSbnm2Ttb'+
			'6s1813k7uwDTWFcGkKx9rtKVeSOzj7On+i28rMT03eXMV+TmPXbEyXkj4dTEUNMV+tVmH68cGPQO2rojy/Td5aYt6I2tnbj1wy91s+SSldh5zr9ZgMqS93MM//mnhv8vz1YmiawXImVJJ89brRCTZHb1dbz+yVBbASS9XUpWeYcp3asY6OvZX3HezMbWTvy1janLNNaVSfS5J+WGr1htZv6AtREPn6/FdJNuczMbWzuZL1Q6jcqV7Zj8+udcwy/Jmooi1/ygAPWuyGoQ/Vggp5O+96ZybijaTKPrexTJ8yKvP06eO72Po9GVASRiN8l36csXubY72Njaiem7y7nyE8kbBvO2ADe2dmJ+72+6YaPAdiwur8f03eW4+OWLliqCpdXN/Wuet5y8AepdkN6YsFzZLtQQKbIl+0Gy8hxHkTxPjjv59c+5tiaK2A2Yk1//LP'+
			'dxhLpyCCtRvd3BZxdK8cF7tYnIpdXNWPx1veWHMcmJJGPd4+/1Z84sWvptsybnkmX+2VpNYGl1i4v03zdSpEeWSM9eWfx1PWYj3/E2/rWzX6G00wpMrnmj77Jc2Y6l33ZnJeVdkNjK52gm73eQJc/3nZ6l1mzleTNLq5tx64dfaraRabdl/qayHTMPXsfAH3+vSorMdsr6LhoFiWSx4PhIf0x+VKrZzmdja2f/mT7oPmilzLSNrZ2677ybNwht5A/HXeCZm0+fRsSnx10uQJf76e39y5ePs8CuHcIC4GgJIAAUIoAAUIgAAkAhAggAhQggABQigABQiAACQCECCACFCCAAFCKAAFCIAAJAIQIIAIUIIAAUIoAAUIgAAkAhAggAhQggABQigABQiAACQCECCACFCCAAFCKAAFBIJwLIegfKBOh2x163diKA/KMDZQJ0'+
			'u2OvWzsRQB53oEyAbnfsdesfjrvAiIgzN5/+b0SMdqJsgC608vb+5f887kI7lUS/06FyAbpRR+rUjvRAIiLO3Hz6NCI+7VT5AF3ip7f3L1/uRMGdnMZ7LSJWOlg+wLtuJXbr0o7oWAB5e//yeggiAEWtRMS1vbq0Izo2hJU4c/PpYEQ8CsNZAHn9FB0OHhEnIIAkztx8ejUivg+zswAaWYmIO2/vXz4RyyFOTABJnLn59HxEXI2IP0XEYIdPB6DT1mN3keDjt/cvv+r0yQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA'+
			'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAANBB/w9/KBSMgcaJAAAAAABJRU5ErkJggg==';
		els.setAttribute('src',hs);
		els.ggNormalSrc=hs;
		els.setAttribute('style','position: absolute;top: 0px;left: 0px;width: 100%;height: 100%;-webkit-user-drag:none;pointer-events:none;;');
		els.className='ggskin ggskin_button';
		els['ondragstart']=function() { return false; };
		player.checkLoaded.push(els);
		el.appendChild(els);
		el.ggSubElement = els;
		el.ggId="Button 1";
		el.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		el.ggVisible=true;
		el.className="ggskin ggskin_button ";
		el.ggType='button';
		hs ='';
		hs+='cursor : pointer;';
		hs+='height : 142px;';
		hs+='position : absolute;';
		hs+='right : 233px;';
		hs+='top : -25px;';
		hs+='visibility : inherit;';
		hs+='width : 142px;';
		hs+='pointer-events:auto;';
		el.setAttribute('style',hs);
		el.style[domTransform + 'Origin']='50% 50%';
		me._button_1.ggIsActive=function() {
			return false;
		}
		el.ggElementNodeId=function() {
			return player.getCurrentNode();
		}
		me._button_1.onclick=function (e) {
			player.openUrl("https:\/\/www.hw.ac.uk\/","");
		}
		me._button_1.ggUpdatePosition=function (useTransition) {
		}
		me.divSkin.appendChild(me._button_1);
		el=me._button_7=document.createElement('div');
		els=me._button_7__img=document.createElement('img');
		els.className='ggskin ggskin_button_7';
		hs='data:image/png;base64,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';
		els.setAttribute('src',hs);
		els.ggNormalSrc=hs;
		els.setAttribute('style','position: absolute;top: 0px;left: 0px;width: 100%;height: 100%;-webkit-user-drag:none;pointer-events:none;;');
		els.className='ggskin ggskin_button';
		els['ondragstart']=function() { return false; };
		player.checkLoaded.push(els);
		el.appendChild(els);
		el.ggSubElement = els;
		hs='data:image/png;base64,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';
		me._button_7__img.ggOverSrc=hs;
		el.ggId="Button 7";
		el.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		el.ggVisible=true;
		el.className="ggskin ggskin_button ";
		el.ggType='button';
		hs ='';
		hs+='cursor : pointer;';
		hs+='height : 142px;';
		hs+='position : absolute;';
		hs+='right : 360px;';
		hs+='top : -25px;';
		hs+='visibility : inherit;';
		hs+='width : 142px;';
		hs+='pointer-events:auto;';
		el.setAttribute('style',hs);
		el.style[domTransform + 'Origin']='50% 50%';
		me._button_7.ggIsActive=function() {
			return false;
		}
		el.ggElementNodeId=function() {
			return player.getCurrentNode();
		}
		me._button_7.onclick=function (e) {
			player.openUrl("","");
		}
		me._button_7.onmouseover=function (e) {
			me._button_7__img.src=me._button_7__img.ggOverSrc;
		}
		me._button_7.onmouseout=function (e) {
			me._button_7__img.src=me._button_7__img.ggNormalSrc;
		}
		me._button_7.ggUpdatePosition=function (useTransition) {
		}
		me.divSkin.appendChild(me._button_7);
		el=me._button_2=document.createElement('div');
		els=me._button_2__img=document.createElement('img');
		els.className='ggskin ggskin_button_2';
		hs=basePath + 'images/button_2.png';
		els.setAttribute('src',hs);
		els.ggNormalSrc=hs;
		els.setAttribute('style','position: absolute;top: 0px;left: 0px;width: 100%;height: 100%;-webkit-user-drag:none;pointer-events:none;;');
		els.className='ggskin ggskin_button';
		els['ondragstart']=function() { return false; };
		player.checkLoaded.push(els);
		el.appendChild(els);
		el.ggSubElement = els;
		hs=basePath + 'images/button_2__o.png';
		me._button_2__img.ggOverSrc=hs;
		el.ggId="Button 2";
		el.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		el.ggVisible=true;
		el.className="ggskin ggskin_button ";
		el.ggType='button';
		hs ='';
		hs+='cursor : pointer;';
		hs+='height : 100px;';
		hs+='position : absolute;';
		hs+='right : 20px;';
		hs+='top : 24px;';
		hs+='visibility : inherit;';
		hs+='width : 198px;';
		hs+='pointer-events:auto;';
		el.setAttribute('style',hs);
		el.style[domTransform + 'Origin']='50% 50%';
		me._button_2.ggIsActive=function() {
			return false;
		}
		el.ggElementNodeId=function() {
			return player.getCurrentNode();
		}
		me._button_2.onclick=function (e) {
			player.openUrl("https:\/\/www.hw.ac.uk\/","");
		}
		me._button_2.onmouseover=function (e) {
			me._button_2__img.src=me._button_2__img.ggOverSrc;
		}
		me._button_2.onmouseout=function (e) {
			me._button_2__img.src=me._button_2__img.ggNormalSrc;
		}
		me._button_2.ggUpdatePosition=function (useTransition) {
		}
		me.divSkin.appendChild(me._button_2);
		el=me._button_3=document.createElement('div');
		els=me._button_3__img=document.createElement('img');
		els.className='ggskin ggskin_button_3';
		hs='data:image/png;base64,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';
		els.setAttribute('src',hs);
		els.ggNormalSrc=hs;
		els.setAttribute('style','position: absolute;top: 0px;left: 0px;width: 100%;height: 100%;-webkit-user-drag:none;pointer-events:none;;');
		els.className='ggskin ggskin_button';
		els['ondragstart']=function() { return false; };
		player.checkLoaded.push(els);
		el.appendChild(els);
		el.ggSubElement = els;
		el.ggId="Button 3";
		el.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		el.ggVisible=true;
		el.className="ggskin ggskin_button ";
		el.ggType='button';
		hs ='';
		hs+='cursor : pointer;';
		hs+='height : 29px;';
		hs+='left : 37px;';
		hs+='position : absolute;';
		hs+='top : 30px;';
		hs+='visibility : inherit;';
		hs+='width : 29px;';
		hs+='pointer-events:auto;';
		el.setAttribute('style',hs);
		el.style[domTransform + 'Origin']='50% 50%';
		me._button_3.ggIsActive=function() {
			return false;
		}
		el.ggElementNodeId=function() {
			return player.getCurrentNode();
		}
		me._button_3.onclick=function (e) {
			player.openNext("{node1}","");
		}
		me._button_3.ggUpdatePosition=function (useTransition) {
		}
		me.divSkin.appendChild(me._button_3);
		el=me._drop_study=document.createElement('div');
		el.ggId="DROP STUDY";
		el.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		el.ggVisible=true;
		el.className="ggskin ggskin_container ";
		el.ggType='container';
		hs ='';
		hs+='height : 142px;';
		hs+='left : 88px;';
		hs+='overflow : hidden;';
		hs+='position : absolute;';
		hs+='top : 29px;';
		hs+='visibility : inherit;';
		hs+='width : 155px;';
		hs+='pointer-events:none;';
		el.setAttribute('style',hs);
		el.style[domTransform + 'Origin']='50% 50%';
		me._drop_study.ggIsActive=function() {
			return false;
		}
		el.ggElementNodeId=function() {
			return player.getCurrentNode();
		}
		me._drop_study.onclick=function (e) {
			player.openNext("{node4}","");
		}
		me._drop_study.ggUpdatePosition=function (useTransition) {
		}
		el=me._dropdown_background1=document.createElement('div');
		el.ggId="Dropdown Background";
		el.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		el.ggVisible=false;
		el.className="ggskin ggskin_rectangle ";
		el.ggType='rectangle';
		hs ='';
		hs+='background : rgba(128,128,128,0.784314);';
		hs+='border : 0px solid #ffffff;';
		hs+='cursor : default;';
		hs+='height : 30px;';
		hs+='left : 1px;';
		hs+='position : absolute;';
		hs+='top : 34px;';
		hs+='visibility : hidden;';
		hs+='width : 150px;';
		hs+='pointer-events:auto;';
		el.setAttribute('style',hs);
		el.style[domTransform + 'Origin']='50% 50%';
		me._dropdown_background1.ggIsActive=function() {
			if ((this.parentNode) && (this.parentNode.ggIsActive)) {
				return this.parentNode.ggIsActive();
			}
			return false;
		}
		el.ggElementNodeId=function() {
			if ((this.parentNode) && (this.parentNode.ggElementNodeId)) {
				return this.parentNode.ggElementNodeId();
			}
			return player.getCurrentNode();
		}
		me._dropdown_background1.ggUpdatePosition=function (useTransition) {
		}
		el=me._dropdown_scrollarea1=document.createElement('div');
		els=me._dropdown_scrollarea1__content=document.createElement('div');
		els.className='ggskin ggskin_subelement ggskin_scrollarea';
		el.ggContent=els;
		el.appendChild(els);
		el.ggHorScrollVisible = false;
		el.ggVertScrollVisible = false;
		el.ggContentLeftOffset = 0;
		el.ggContentTopOffset = 0;
		hs ='';
		hs+='height : 23px;';
		hs+='left : 0px;';
		hs+='overflow : visible;';
		hs+='position : absolute;';
		hs+='top : 0px;';
		hs+='width : 168px;';
		hs+="";
		els.setAttribute('style',hs);
		me._dropdown_scrollarea1.ggScrollByX = function(diffX) {
			if(!me._dropdown_scrollarea1.ggHorScrollVisible || diffX == 0 || me._dropdown_scrollarea1.ggHPercentVisible >= 1.0) return;
			me._dropdown_scrollarea1.ggScrollPosX = (me._dropdown_scrollarea1__horScrollFg.offsetLeft + diffX);
			me._dropdown_scrollarea1.ggScrollPosX = Math.max(me._dropdown_scrollarea1.ggScrollPosX, 0);
			me._dropdown_scrollarea1.ggScrollPosX = Math.min(me._dropdown_scrollarea1.ggScrollPosX, me._dropdown_scrollarea1__horScrollBg.offsetWidth - me._dropdown_scrollarea1__horScrollFg.offsetWidth);
			me._dropdown_scrollarea1__horScrollFg.style.left = me._dropdown_scrollarea1.ggScrollPosX + 'px';
			me._dropdown_scrollarea1__content.style.left = -(Math.round(me._dropdown_scrollarea1.ggScrollPosX / me._dropdown_scrollarea1.ggHPercentVisible)) + me._dropdown_scrollarea1.ggContentLeftOffset + 'px';
			me._dropdown_scrollarea1.ggScrollPosXPercent = (me._dropdown_scrollarea1__horScrollFg.offsetLeft / me._dropdown_scrollarea1__horScrollBg.offsetWidth);
		}
		me._dropdown_scrollarea1.ggScrollByXSmooth = function(diffX) {
			if(!me._dropdown_scrollarea1.ggHorScrollVisible || diffX == 0 || me._dropdown_scrollarea1.ggHPercentVisible >= 1.0) return;
			var scrollPerInterval = diffX / 25;
			var scrollCurrX = 0;
			var id = setInterval(function() {
				scrollCurrX += scrollPerInterval;
				me._dropdown_scrollarea1.ggScrollPosX += scrollPerInterval;
				if (diffX > 0 && (scrollCurrX >= diffX || me._dropdown_scrollarea1.ggScrollPosX >= me._dropdown_scrollarea1__horScrollBg.offsetWidth - me._dropdown_scrollarea1__horScrollFg.offsetWidth)) {
					me._dropdown_scrollarea1.ggScrollPosX = Math.min(me._dropdown_scrollarea1.ggScrollPosX, me._dropdown_scrollarea1__horScrollBg.offsetWidth - me._dropdown_scrollarea1__horScrollFg.offsetWidth);
					clearInterval(id);
				}
				if (diffX < 0 && (scrollCurrX <= diffX || me._dropdown_scrollarea1.ggScrollPosX <= 0)) {
					me._dropdown_scrollarea1.ggScrollPosX = Math.max(me._dropdown_scrollarea1.ggScrollPosX, 0);
					clearInterval(id);
				}
			me._dropdown_scrollarea1__horScrollFg.style.left = me._dropdown_scrollarea1.ggScrollPosX + 'px';
			me._dropdown_scrollarea1__content.style.left = -(Math.round(me._dropdown_scrollarea1.ggScrollPosX / me._dropdown_scrollarea1.ggHPercentVisible)) + me._dropdown_scrollarea1.ggContentLeftOffset + 'px';
			me._dropdown_scrollarea1.ggScrollPosXPercent = (me._dropdown_scrollarea1__horScrollFg.offsetLeft / me._dropdown_scrollarea1__horScrollBg.offsetWidth);
			}, 10);
		}
		me._dropdown_scrollarea1.ggScrollByY = function(diffY) {
			if(!me._dropdown_scrollarea1.ggVertScrollVisible || diffY == 0 || me._dropdown_scrollarea1.ggVPercentVisible >= 1.0) return;
			me._dropdown_scrollarea1.ggScrollPosY = (me._dropdown_scrollarea1__vertScrollFg.offsetTop + diffY);
			me._dropdown_scrollarea1.ggScrollPosY = Math.max(me._dropdown_scrollarea1.ggScrollPosY, 0);
			me._dropdown_scrollarea1.ggScrollPosY = Math.min(me._dropdown_scrollarea1.ggScrollPosY, me._dropdown_scrollarea1__vertScrollBg.offsetHeight - me._dropdown_scrollarea1__vertScrollFg.offsetHeight);
			me._dropdown_scrollarea1__vertScrollFg.style.top = me._dropdown_scrollarea1.ggScrollPosY + 'px';
			me._dropdown_scrollarea1__content.style.top = -(Math.round(me._dropdown_scrollarea1.ggScrollPosY / me._dropdown_scrollarea1.ggVPercentVisible)) + me._dropdown_scrollarea1.ggContentTopOffset + 'px';
			me._dropdown_scrollarea1.ggScrollPosYPercent = (me._dropdown_scrollarea1__vertScrollFg.offsetTop / me._dropdown_scrollarea1__vertScrollBg.offsetHeight);
		}
		me._dropdown_scrollarea1.ggScrollByYSmooth = function(diffY) {
			if(!me._dropdown_scrollarea1.ggVertScrollVisible || diffY == 0 || me._dropdown_scrollarea1.ggVPercentVisible >= 1.0) return;
			var scrollPerInterval = diffY / 25;
			var scrollCurrY = 0;
			var id = setInterval(function() {
				scrollCurrY += scrollPerInterval;
				me._dropdown_scrollarea1.ggScrollPosY += scrollPerInterval;
				if (diffY > 0 && (scrollCurrY >= diffY || me._dropdown_scrollarea1.ggScrollPosY >= me._dropdown_scrollarea1__vertScrollBg.offsetHeight - me._dropdown_scrollarea1__vertScrollFg.offsetHeight)) {
					me._dropdown_scrollarea1.ggScrollPosY = Math.min(me._dropdown_scrollarea1.ggScrollPosY, me._dropdown_scrollarea1__vertScrollBg.offsetHeight - me._dropdown_scrollarea1__vertScrollFg.offsetHeight);
					clearInterval(id);
				}
				if (diffY < 0 && (scrollCurrY <= diffY || me._dropdown_scrollarea1.ggScrollPosY <= 0)) {
					me._dropdown_scrollarea1.ggScrollPosY = Math.max(me._dropdown_scrollarea1.ggScrollPosY, 0);
					clearInterval(id);
				}
			me._dropdown_scrollarea1__vertScrollFg.style.top = me._dropdown_scrollarea1.ggScrollPosY + 'px';
			me._dropdown_scrollarea1__content.style.top = -(Math.round(me._dropdown_scrollarea1.ggScrollPosY / me._dropdown_scrollarea1.ggVPercentVisible)) + me._dropdown_scrollarea1.ggContentTopOffset + 'px';
			me._dropdown_scrollarea1.ggScrollPosYPercent = (me._dropdown_scrollarea1__vertScrollFg.offsetTop / me._dropdown_scrollarea1__vertScrollBg.offsetHeight);
			}, 10);
		}
		me._dropdown_scrollarea1.ggScrollIntoView = function(posX, posY, width, height) {
			if (me._dropdown_scrollarea1.ggHorScrollVisible) {
				if (posX < 0) {
					var diffX = Math.floor(posX * me._dropdown_scrollarea1.ggHPercentVisible);
					me._dropdown_scrollarea1.ggScrollByXSmooth(diffX);
				} else if (posX + width > me._dropdown_scrollarea1.offsetWidth - (me._dropdown_scrollarea1.ggVertScrollVisible ? 15 : 0)) {
					var diffX = Math.ceil(((posX + width) - (me._dropdown_scrollarea1.offsetWidth - (me._dropdown_scrollarea1.ggVertScrollVisible ? 15 : 0))) * me._dropdown_scrollarea1.ggHPercentVisible);
					me._dropdown_scrollarea1.ggScrollByXSmooth(diffX);
				}
			}
			if (me._dropdown_scrollarea1.ggVertScrollVisible) {
				if (posY < 0) {
					var diffY = Math.floor(posY * me._dropdown_scrollarea1.ggVPercentVisible);
					me._dropdown_scrollarea1.ggScrollByYSmooth(diffY);
				} else if (posY + height > me._dropdown_scrollarea1.offsetHeight - (me._dropdown_scrollarea1.ggHorScrollVisible ? 15 : 0)) {
					var diffY = Math.ceil(((posY + height) - (me._dropdown_scrollarea1.offsetHeight - (me._dropdown_scrollarea1.ggHorScrollVisible ? 15 : 0))) * me._dropdown_scrollarea1.ggVPercentVisible);
					me._dropdown_scrollarea1.ggScrollByYSmooth(diffY);
				}
			}
		}
		els.ontouchstart = function(e) {
			e = e || window.event;
			var t = e.touches;
			me._dropdown_scrollarea1.ggDragLastX = t[0].clientX;
			me._dropdown_scrollarea1.ggDragLastY = t[0].clientY;
			me._dropdown_scrollarea1__content.ontouchend = function() {
				let inertiaInterval = setInterval(function() {
					me._dropdown_scrollarea1.ggDragInertiaX *= 0.65;
					me._dropdown_scrollarea1.ggDragInertiaY *= 0.65;
					me._dropdown_scrollarea1.ggScrollByX(-me._dropdown_scrollarea1.ggDragInertiaX);
					me._dropdown_scrollarea1.ggScrollByY(-me._dropdown_scrollarea1.ggDragInertiaY);
					if (Math.abs(me._dropdown_scrollarea1.ggDragInertiaX) < 1.0 && Math.abs(me._dropdown_scrollarea1.ggDragInertiaY) < 1.0) {
						clearInterval(inertiaInterval);
					}
					}, 50);
				me._dropdown_scrollarea1__content.ontouchend = null;
				me._dropdown_scrollarea1__content.ontouchmove = null;
			}
			me._dropdown_scrollarea1__content.ontouchmove = function(e) {
				e = e || window.event;
				e.preventDefault();
				var t = e.touches;
				var diffX = t[0].clientX - me._dropdown_scrollarea1.ggDragLastX;
				var diffY = t[0].clientY - me._dropdown_scrollarea1.ggDragLastY;
				me._dropdown_scrollarea1.ggDragInertiaX = diffX;
				me._dropdown_scrollarea1.ggDragInertiaY = diffY;
				me._dropdown_scrollarea1.ggDragLastX = t[0].clientX;
				me._dropdown_scrollarea1.ggDragLastY = t[0].clientY;
				me._dropdown_scrollarea1.ggScrollByX(-diffX);
				me._dropdown_scrollarea1.ggScrollByY(-diffY);
			}
		}
		elVertScrollBg = me._dropdown_scrollarea1__vertScrollBg = document.createElement('div');
		el.appendChild(elVertScrollBg);
		elVertScrollBg.setAttribute('style', 'position: absolute; right: 0px; top: 0px; visibility: hidden; width: 15px; height: 73px; background-color: rgba(128,128,128,0); pointer-events: auto;');
		elVertScrollBg.className='ggskin ggskin_scrollarea_vscrollbg';
		elVertScrollFg = me._dropdown_scrollarea1__vertScrollFg = document.createElement('div');
		elVertScrollBg.appendChild(elVertScrollFg);
		elVertScrollFg.setAttribute('style', 'position: absolute; left: 0px; top: 0px; visibility: hidden; width: 15px; height: 73px; background-color: rgba(255,255,255,1); pointer-events: auto;');
		elVertScrollFg.className='ggskin ggskin_scrollarea_vscrollfg';
		me._dropdown_scrollarea1.ggScrollPosY = 0;
		me._dropdown_scrollarea1.ggScrollPosYPercent = 0.0;
		elVertScrollFg.onmousedown = function(e) {
			e = e || window.event;
			e.preventDefault();
			e.stopPropagation();
			me._dropdown_scrollarea1.ggDragLastY = e.clientY;
			document.onmouseup = function() {
				let inertiaInterval = setInterval(function() {
					me._dropdown_scrollarea1.ggDragInertiaY *= 0.65;
					me._dropdown_scrollarea1.ggScrollByY(me._dropdown_scrollarea1.ggDragInertiaY);
					if (Math.abs(me._dropdown_scrollarea1.ggDragInertiaY) < 1.0) {
						clearInterval(inertiaInterval);
					}
					}, 50);
				document.onmouseup = null;
				document.onmousemove = null;
			}
			document.onmousemove = function(e) {
				e = e || window.event;
				e.preventDefault();
				var diffY = e.clientY - me._dropdown_scrollarea1.ggDragLastY;
				me._dropdown_scrollarea1.ggDragInertiaY = diffY;
				me._dropdown_scrollarea1.ggDragLastY = e.clientY;
				me._dropdown_scrollarea1.ggScrollByY(diffY);
			}
		}
		elVertScrollFg.ontouchstart = function(e) {
			e = e || window.event;
			e.preventDefault();
			e.stopPropagation();
			var t = e.touches;
			me._dropdown_scrollarea1.ggDragLastY = t[0].clientY;
			document.ontouchend = function() {
				let inertiaInterval = setInterval(function() {
					me._dropdown_scrollarea1.ggDragInertiaY *= 0.65;
					me._dropdown_scrollarea1.ggScrollByY(me._dropdown_scrollarea1.ggDragInertiaY);
					if (Math.abs(me._dropdown_scrollarea1.ggDragInertiaY) < 1.0) {
						clearInterval(inertiaInterval);
					}
					}, 50);
				document.ontouchend = null;
				document.ontouchmove = null;
			}
			document.ontouchmove = function(e) {
				e = e || window.event;
				e.preventDefault();
				var t = e.touches;
				var diffY = t[0].clientY - me._dropdown_scrollarea1.ggDragLastY;
				me._dropdown_scrollarea1.ggDragInertiaY = diffY;
				me._dropdown_scrollarea1.ggDragLastY = t[0].clientY;
				me._dropdown_scrollarea1.ggScrollByY(diffY);
			}
		}
		elVertScrollBg.onmousedown = function(e) {
			e = e || window.event;
			e.preventDefault();
			var diffY = me._dropdown_scrollarea1.ggScrollHeight;
			if (e.offsetY < me._dropdown_scrollarea1.ggScrollPosY) {
				diffY = diffY * -1;
			}
			me._dropdown_scrollarea1.ggScrollByYSmooth(diffY);
		}
		elVertScrollBg.ontouchstart = function(e) {
			e = e || window.event;
			e.preventDefault();
			e.stopPropagation();
			var t = e.touches;
			var rect = me._dropdown_scrollarea1__vertScrollBg.getBoundingClientRect();
			var diffY = me._dropdown_scrollarea1.ggScrollHeight;
			if ((t[0].clientY - rect.top) < me._dropdown_scrollarea1.ggScrollPosY) {
				diffY = diffY * -1;
			}
			me._dropdown_scrollarea1.ggScrollByYSmooth(diffY);
		}
		el.addEventListener('wheel', function(e) {
			e.preventDefault();
			var wheelDelta = Math.sign(e.deltaY);
			me._dropdown_scrollarea1.ggScrollByYSmooth(20 * wheelDelta);
		});
		elCornerBg = me._dropdown_scrollarea1__cornerBg = document.createElement('div');
		el.appendChild(elCornerBg);
		elCornerBg.setAttribute('style', 'position: absolute; right: 0px; bottom: 0px; visibility: hidden; width: 15px; height: 15px; background-color: rgba(255,255,255,1);');
		elCornerBg.className='ggskin ggskin_scrollarea_scrollcorner';
		el.ggId="Dropdown Scrollarea";
		el.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		el.ggVisible=true;
		el.className="ggskin ggskin_scrollarea ";
		el.ggType='scrollarea';
		hs ='';
		hs+='border : 1px solid rgba(0, 0, 0, 0);';
		hs+='cursor : pointer;';
		hs+='height : 73px;';
		hs+='left : 0px;';
		hs+='overflow : hidden;';
		hs+='position : absolute;';
		hs+='top : 0px;';
		hs+='visibility : inherit;';
		hs+='width : 150px;';
		hs+='pointer-events:auto;';
		hs+='<style> .dropdown { position: relative; display: inline-block; } .dropdown-content { display: none; position: absolute; background-color: #f9f9f9; min-width: 160px; box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2); padding: 12px 16px; z-index: 1; } .dropdown:hover .dropdown-content { display: block; } <\/style> <div class=\"dropdown\"> <span>Mouse over me<\/span> <div class=\"dropdown-content\"> <p>Hello World!<\/p> <\/div> <\/div>';
		el.setAttribute('style',hs);
		el.style[domTransform + 'Origin']='50% 50%';
		me._dropdown_scrollarea1.ggIsActive=function() {
			if ((this.parentNode) && (this.parentNode.ggIsActive)) {
				return this.parentNode.ggIsActive();
			}
			return false;
		}
		el.ggElementNodeId=function() {
			if ((this.parentNode) && (this.parentNode.ggElementNodeId)) {
				return this.parentNode.ggElementNodeId();
			}
			return player.getCurrentNode();
		}
		me._dropdown_scrollarea1.ggUpdatePosition=function (useTransition) {
			{
				var horScrollWasVisible = this.ggHorScrollVisible;
				var vertScrollWasVisible = this.ggVertScrollVisible;
				this.ggContent.style.left = '0px';
				this.ggContent.style.top = '0px';
				this.ggContentLeftOffset = 0;
				this.ggContentTopOffset = 0;
				var offsetWidthWithScale = this.getBoundingClientRect().width;
				var offsetHeightWithScale = this.getBoundingClientRect().height;
				var domRectContent = this.ggContent.getBoundingClientRect();
				var minX = 0;
				var minY = 0;
				var maxX = 0;
				var maxY = 0;
				var stack=[];
				stack.push(this.ggContent);
				while(stack.length>0) {
					var e=stack.pop();
					if (e!=this.ggContent && e.getBoundingClientRect && e.style['display']!='none') {
						var domRectChild = e.getBoundingClientRect();
						var diffX = domRectChild.left - domRectContent.left;
						minX = Math.min(minX, diffX);
						maxX = Math.max(maxX, diffX + domRectChild.width);
						var diffY = domRectChild.top - domRectContent.top;
						minY = Math.min(minY, diffY);
						maxY = Math.max(maxY, diffY + domRectChild.height);
					}
					if (e.hasChildNodes() && e.style['display']!='none') {
						for(var i=0;i<e.childNodes.length;i++) {
							stack.push(e.childNodes[i]);
						}
					}
				}
				if (minX < 0) this.ggContentLeftOffset = -minX;
				if (minY < 0) this.ggContentTopOffset = -minY;
				var contentWidth = maxX - minX;
				var contentHeight = maxY - minY;
				this.ggContent.style.left = this.ggContentLeftOffset + 'px';
				this.ggContent.style.top = this.ggContentTopOffset + 'px';
				this.ggContent.style.width = contentWidth + 'px';
				this.ggContent.style.height = contentHeight + 'px';
				this.ggContent.style.left = this.ggContentLeftOffset + 'px';
				this.ggContent.style.marginLeft = '0px';
				this.ggContent.style.top = -(Math.round(me._dropdown_scrollarea1.ggScrollPosY / me._dropdown_scrollarea1.ggVPercentVisible)) + this.ggContentTopOffset + 'px';
				this.ggContent.style.marginTop = '0px';
				if ((me._dropdown_scrollarea1.ggHorScrollVisible && contentHeight > this.offsetHeight - 15) || (!me._dropdown_scrollarea1.ggHorScrollVisible && contentHeight > this.offsetHeight)) {
					me._dropdown_scrollarea1__vertScrollBg.style.visibility = 'inherit';
					me._dropdown_scrollarea1__vertScrollFg.style.visibility = 'inherit';
					me._dropdown_scrollarea1.ggVertScrollVisible = true;
				} else {
					me._dropdown_scrollarea1__vertScrollBg.style.visibility = 'hidden';
					me._dropdown_scrollarea1__vertScrollFg.style.visibility = 'hidden';
					me._dropdown_scrollarea1.ggVertScrollVisible = false;
				}
				if(me._dropdown_scrollarea1.ggVertScrollVisible) {
					me._dropdown_scrollarea1.ggAvailableWidth = me._dropdown_scrollarea1.offsetWidth - 15;
					if (me._dropdown_scrollarea1.ggHorScrollVisible) {
						me._dropdown_scrollarea1.ggAvailableHeight = me._dropdown_scrollarea1.offsetHeight - 15;
						me._dropdown_scrollarea1.ggAvailableHeightWithScale = me._dropdown_scrollarea1.getBoundingClientRect().height - me._dropdown_scrollarea1__vertScrollBg.getBoundingClientRect().width;
						me._dropdown_scrollarea1__cornerBg.style.visibility = 'inherit';
					} else {
						me._dropdown_scrollarea1.ggAvailableHeight = me._dropdown_scrollarea1.offsetHeight;
						me._dropdown_scrollarea1.ggAvailableHeightWithScale = me._dropdown_scrollarea1.getBoundingClientRect().height;
						me._dropdown_scrollarea1__cornerBg.style.visibility = 'hidden';
					}
					me._dropdown_scrollarea1__vertScrollBg.style.height = me._dropdown_scrollarea1.ggAvailableHeight + 'px';
					me._dropdown_scrollarea1.ggVPercentVisible = contentHeight != 0 ? me._dropdown_scrollarea1.ggAvailableHeightWithScale / contentHeight : 0.0;
					if (me._dropdown_scrollarea1.ggVPercentVisible > 1.0) me._dropdown_scrollarea1.ggVPercentVisible = 1.0;
					me._dropdown_scrollarea1.ggScrollHeight =  Math.round(me._dropdown_scrollarea1__vertScrollBg.offsetHeight * me._dropdown_scrollarea1.ggVPercentVisible);
					me._dropdown_scrollarea1__vertScrollFg.style.height = me._dropdown_scrollarea1.ggScrollHeight + 'px';
					me._dropdown_scrollarea1.ggScrollPosY = me._dropdown_scrollarea1.ggScrollPosYPercent * me._dropdown_scrollarea1.ggAvailableHeight;
					me._dropdown_scrollarea1.ggScrollPosY = Math.min(me._dropdown_scrollarea1.ggScrollPosY, me._dropdown_scrollarea1__vertScrollBg.offsetHeight - me._dropdown_scrollarea1__vertScrollFg.offsetHeight);
					me._dropdown_scrollarea1__vertScrollFg.style.top = me._dropdown_scrollarea1.ggScrollPosY + 'px';
					if (me._dropdown_scrollarea1.ggVPercentVisible < 1.0) {
						me._dropdown_scrollarea1__content.style.top = -(Math.round(me._dropdown_scrollarea1.ggScrollPosY / me._dropdown_scrollarea1.ggVPercentVisible)) + this.ggContentTopOffset + 'px';
					}
				} else {
					me._dropdown_scrollarea1.ggAvailableWidth = me._dropdown_scrollarea1.offsetWidth;
					me._dropdown_scrollarea1.ggScrollPosY = 0;
					me._dropdown_scrollarea1.ggScrollPosYPercent = 0.0;
					me._dropdown_scrollarea1__content.style.top = this.ggContentTopOffset + 'px';
					me._dropdown_scrollarea1__cornerBg.style.visibility = 'hidden';
				}
				if(horScrollWasVisible != me._dropdown_scrollarea1.ggHorScrollVisible || vertScrollWasVisible != me._dropdown_scrollarea1.ggVertScrollVisible) {
					me.updateSize(me._dropdown_scrollarea1);
					me._dropdown_scrollarea1.ggUpdatePosition();
				}
			}
		}
		el=me._dropdown_cloner1=document.createElement('div');
		el.ggNumRepeat = 1;
		el.ggNumRows = 0;
		el.ggNumCols = 0;
		el.ggWidth = 169;
		el.ggHeight = 24;
		el.ggUpdating = false;
		el.ggFilter = [];
		el.ggInstances = [];
		me._dropdown_cloner1.callChildLogicBlocks_mouseover = function(){
			if(me._dropdown_cloner1.ggInstances) {
				var i;
				for(i = 0; i < me._dropdown_cloner1.ggInstances.length; i++) {
					if (me._dropdown_cloner1.ggInstances[i]._dropdown_menu_text1 && me._dropdown_cloner1.ggInstances[i]._dropdown_menu_text1.logicBlock_backgroundcolor) {
						me._dropdown_cloner1.ggInstances[i]._dropdown_menu_text1.logicBlock_backgroundcolor();
					}
				}
			}
		}
		me._dropdown_cloner1.callChildLogicBlocks_active = function(){
			if(me._dropdown_cloner1.ggInstances) {
				var i;
				for(i = 0; i < me._dropdown_cloner1.ggInstances.length; i++) {
					if (me._dropdown_cloner1.ggInstances[i]._dropdown_menu_text1 && me._dropdown_cloner1.ggInstances[i]._dropdown_menu_text1.logicBlock_backgroundcolor) {
						me._dropdown_cloner1.ggInstances[i]._dropdown_menu_text1.logicBlock_backgroundcolor();
					}
					if (me._dropdown_cloner1.ggInstances[i]._dropdown_checkmark1 && me._dropdown_cloner1.ggInstances[i]._dropdown_checkmark1.logicBlock_alpha) {
						me._dropdown_cloner1.ggInstances[i]._dropdown_checkmark1.logicBlock_alpha();
					}
				}
			}
		}
		me._dropdown_cloner1.callChildLogicBlocks_changevisitednodes = function(){
			if(me._dropdown_cloner1.ggInstances) {
				var i;
				for(i = 0; i < me._dropdown_cloner1.ggInstances.length; i++) {
					if (me._dropdown_cloner1.ggInstances[i]._dropdown_checkmark1 && me._dropdown_cloner1.ggInstances[i]._dropdown_checkmark1.logicBlock_alpha) {
						me._dropdown_cloner1.ggInstances[i]._dropdown_checkmark1.logicBlock_alpha();
					}
				}
			}
		}
		el.ggUpdate = function(filter) {
			if(me._dropdown_cloner1.ggUpdating == true) return;
			me._dropdown_cloner1.ggUpdating = true;
			var el=me._dropdown_cloner1;
			var curNumCols = 0;
			curNumCols = me._dropdown_cloner1.ggNumRepeat;
			if (curNumCols < 1) curNumCols = 1;
			if (typeof filter=='object') {
				el.ggFilter = filter;
			} else {
				filter = el.ggFilter;
			};
			if (me.ggTag) filter.push(me.ggTag);
			filter=filter.sort();
			if ((el.ggNumCols == curNumCols) && (el.ggInstances.length > 0) && (filter.length === el.ggCurrentFilter.length) && (filter.every(function(value, index) { return value === el.ggCurrentFilter[index] }) )) {
				me._dropdown_cloner1.ggUpdating = false;
				return;
			} else {
				el.ggNumRows = 1;
				el.ggNumCols = curNumCols;
			}
			el.ggCurrentFilter = filter;
			el.ggInstances = [];
			if (el.hasChildNodes() == true) {
				while (el.firstChild) {
					el.removeChild(el.firstChild);
				}
			}
			var tourNodes = player.getNodeIds();
			var row = 0;
			var column = 0;
			var currentIndex = 0;
			for (var i=0; i < tourNodes.length; i++) {
				var nodeId = tourNodes[i];
				var passed = true;
				var nodeData = player.getNodeUserdata(nodeId);
				if (filter.length > 0) {
					for (var j=0; j < filter.length; j++) {
						if (nodeData['tags'].indexOf(filter[j]) == -1) passed = false;
					}
				}
				if (passed) {
				var parameter={};
				parameter.top=(row * me._dropdown_cloner1.ggHeight) + 'px';
				parameter.left=(column * me._dropdown_cloner1.ggWidth) + 'px';
				parameter.index=currentIndex;
				parameter.title=nodeData['title'];
				var inst = new SkinCloner_dropdown_cloner1_Class(nodeId, me, el, parameter);
				currentIndex++;
				el.ggInstances.push(inst);
				el.appendChild(inst.__div);
				inst.__div.ggObj=inst;
				skin.updateSize(inst.__div);
				column++;
				if (column >= el.ggNumCols) {
					column = 0;
					row++;
					el.ggNumRows++;
				}
				}
			}
			me._dropdown_cloner1.callChildLogicBlocks_mouseover();
			me._dropdown_cloner1.callChildLogicBlocks_active();
			me._dropdown_cloner1.callChildLogicBlocks_changevisitednodes();
			me._dropdown_cloner1.ggUpdating = false;
			player.triggerEvent('clonerchanged');
			if (me._dropdown_cloner1.parentNode.classList.contains('ggskin_subelement') && me._dropdown_cloner1.parentNode.parentNode.classList.contains('ggskin_scrollarea')) me._dropdown_cloner1.parentNode.parentNode.ggUpdatePosition();
		}
		el.ggFilter = [];
		el.ggId="Dropdown Cloner";
		el.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		el.ggVisible=true;
		el.className="ggskin ggskin_cloner ";
		el.ggType='cloner';
		hs ='';
		hs+='height : 24px;';
		hs+='left : 0px;';
		hs+='overflow : visible;';
		hs+='position : absolute;';
		hs+='top : 0px;';
		hs+='visibility : inherit;';
		hs+='width : 169px;';
		hs+='pointer-events:none;';
		el.setAttribute('style',hs);
		el.style[domTransform + 'Origin']='50% 50%';
		me._dropdown_cloner1.ggIsActive=function() {
			if ((this.parentNode) && (this.parentNode.ggIsActive)) {
				return this.parentNode.ggIsActive();
			}
			return false;
		}
		el.ggElementNodeId=function() {
			if ((this.parentNode) && (this.parentNode.ggElementNodeId)) {
				return this.parentNode.ggElementNodeId();
			}
			return player.getCurrentNode();
		}
		me._dropdown_cloner1.ggUpdateConditionNodeChange=function () {
			var cnode=player.getCurrentNode();
			for(var i=0; i<me._dropdown_cloner1.childNodes.length; i++) {
				var child=me._dropdown_cloner1.childNodes[i];
				if (child.ggObj && child.ggObj.ggNodeId==cnode) {
			        var childOffX = child.offsetLeft;
			        var childOffY = child.offsetTop;
					var p = child.parentElement;
			        while (p != null && p!==this.divSkin) {
						if (p.ggType && p.ggType == 'scrollarea') {
							p.ggScrollIntoView(childOffX, childOffY, child.clientWidth, child.clientHeight);
						}
						childOffX += p.offsetLeft;
						childOffY += p.offsetTop;
						p = p.parentElement;
					}
				}
			}
		}
		me._dropdown_cloner1.ggUpdatePosition=function (useTransition) {
				me._dropdown_cloner1.ggUpdate();
		}
		me._dropdown_cloner1.ggNodeChange=function () {
			me._dropdown_cloner1.ggUpdateConditionNodeChange();
		}
		me._dropdown_scrollarea1__content.appendChild(me._dropdown_cloner1);
		me._dropdown_background1.appendChild(me._dropdown_scrollarea1);
		me._drop_study.appendChild(me._dropdown_background1);
		el=me._dropdown_menu_title_background1=document.createElement('div');
		el.ggId="Dropdown Menu Title Background";
		el.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		el.ggVisible=true;
		el.className="ggskin ggskin_rectangle ";
		el.ggType='rectangle';
		hs ='';
		hs+=cssPrefix + 'border-radius : 1px;';
		hs+='border-radius : 1px;';
		hs+='border : 1px solid #ffffff;';
		hs+='cursor : pointer;';
		hs+='height : 30px;';
		hs+='left : 0px;';
		hs+='position : absolute;';
		hs+='top : 0px;';
		hs+='visibility : inherit;';
		hs+='width : 150px;';
		hs+='pointer-events:auto;';
		el.setAttribute('style',hs);
		el.style[domTransform + 'Origin']='50% 50%';
		me._dropdown_menu_title_background1.ggIsActive=function() {
			if ((this.parentNode) && (this.parentNode.ggIsActive)) {
				return this.parentNode.ggIsActive();
			}
			return false;
		}
		el.ggElementNodeId=function() {
			if ((this.parentNode) && (this.parentNode.ggElementNodeId)) {
				return this.parentNode.ggElementNodeId();
			}
			return player.getCurrentNode();
		}
		me._dropdown_menu_title_background1.onclick=function (e) {
			me._dropdown_background1.ggVisible = !me._dropdown_background1.ggVisible;
			var flag=me._dropdown_background1.ggVisible;
			me._dropdown_background1.style[domTransition]='none';
			me._dropdown_background1.style.visibility=((flag)&&(Number(me._dropdown_background1.style.opacity)>0||!me._dropdown_background1.style.opacity))?'inherit':'hidden';
		}
		me._dropdown_menu_title_background1.ggUpdatePosition=function (useTransition) {
		}
		el=me._dropdown_menu_title1=document.createElement('div');
		els=me._dropdown_menu_title1__text=document.createElement('div');
		el.className='ggskin ggskin_textdiv';
		el.ggTextDiv=els;
		el.ggId="Dropdown Menu Title";
		el.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		el.ggVisible=true;
		el.className="ggskin ggskin_text ";
		el.ggType='text';
		hs ='';
		hs+='height : 30px;';
		hs+='left : -2px;';
		hs+='position : absolute;';
		hs+='top : 5px;';
		hs+='visibility : inherit;';
		hs+='width : 150px;';
		hs+='pointer-events:none;';
		hs+='font-weight: bold;';
		el.setAttribute('style',hs);
		el.style[domTransform + 'Origin']='50% 50%';
		hs ='position:absolute;';
		hs += 'box-sizing: border-box;';
		hs+='cursor: default;';
		hs+='left: 0px;';
		hs+='top:  0px;';
		hs+='width: auto;';
		hs+='height: auto;';
		hs+='pointer-events: none;';
		hs+='border: 0px solid #000000;';
		hs+='border-radius: 5px;';
		hs+=cssPrefix + 'border-radius: 5px;';
		hs+='color: rgba(255,255,255,1);';
		hs+='font-size: 12px;';
		hs+='font-weight: bold;';
		hs+='text-align: center;';
		hs+='white-space: nowrap;';
		hs+='padding: 1px 2px 1px 2px;';
		hs+='overflow: hidden;';
		els.setAttribute('style',hs);
		me._dropdown_menu_title1.ggUpdateText=function() {
			var hs=me.ggUserdata.title+"STUDY";
			if (hs!=this.ggText) {
				this.ggText=hs;
				this.ggTextDiv.innerHTML=hs;
				if (this.ggUpdatePosition) this.ggUpdatePosition();
			}
		}
		me._dropdown_menu_title1.ggUpdateText();
		player.addListener('changenode', function() {
			me._dropdown_menu_title1.ggUpdateText();
		});
		el.appendChild(els);
		me._dropdown_menu_title1.ggIsActive=function() {
			if ((this.parentNode) && (this.parentNode.ggIsActive)) {
				return this.parentNode.ggIsActive();
			}
			return false;
		}
		el.ggElementNodeId=function() {
			if ((this.parentNode) && (this.parentNode.ggElementNodeId)) {
				return this.parentNode.ggElementNodeId();
			}
			return player.getCurrentNode();
		}
		me._dropdown_menu_title1.ggUpdatePosition=function (useTransition) {
			this.style[domTransition]='left 0';
			this.ggTextDiv.style.left=((148-this.ggTextDiv.offsetWidth)/2) + 'px';
		}
		me._dropdown_menu_title_background1.appendChild(me._dropdown_menu_title1);
		me._drop_study.appendChild(me._dropdown_menu_title_background1);
		me.divSkin.appendChild(me._drop_study);
		el=me._drop_play=document.createElement('div');
		el.ggId="DROP PLAY";
		el.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		el.ggVisible=true;
		el.className="ggskin ggskin_container ";
		el.ggType='container';
		hs ='';
		hs+='height : 142px;';
		hs+='left : 398px;';
		hs+='overflow : hidden;';
		hs+='position : absolute;';
		hs+='top : 29px;';
		hs+='visibility : inherit;';
		hs+='width : 153px;';
		hs+='pointer-events:none;';
		el.setAttribute('style',hs);
		el.style[domTransform + 'Origin']='50% 50%';
		me._drop_play.ggIsActive=function() {
			return false;
		}
		el.ggElementNodeId=function() {
			return player.getCurrentNode();
		}
		me._drop_play.onclick=function (e) {
			player.openNext("{node3}","");
		}
		me._drop_play.ggUpdatePosition=function (useTransition) {
		}
		el=me._dropdown_background0=document.createElement('div');
		el.ggId="Dropdown Background";
		el.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		el.ggVisible=false;
		el.className="ggskin ggskin_rectangle ";
		el.ggType='rectangle';
		hs ='';
		hs+='background : rgba(128,128,128,0.784314);';
		hs+='border : 0px solid #ffffff;';
		hs+='cursor : default;';
		hs+='height : 30px;';
		hs+='left : 1px;';
		hs+='position : absolute;';
		hs+='top : 34px;';
		hs+='visibility : hidden;';
		hs+='width : 150px;';
		hs+='pointer-events:auto;';
		el.setAttribute('style',hs);
		el.style[domTransform + 'Origin']='50% 50%';
		me._dropdown_background0.ggIsActive=function() {
			if ((this.parentNode) && (this.parentNode.ggIsActive)) {
				return this.parentNode.ggIsActive();
			}
			return false;
		}
		el.ggElementNodeId=function() {
			if ((this.parentNode) && (this.parentNode.ggElementNodeId)) {
				return this.parentNode.ggElementNodeId();
			}
			return player.getCurrentNode();
		}
		me._dropdown_background0.ggUpdatePosition=function (useTransition) {
		}
		el=me._dropdown_scrollarea0=document.createElement('div');
		els=me._dropdown_scrollarea0__content=document.createElement('div');
		els.className='ggskin ggskin_subelement ggskin_scrollarea';
		el.ggContent=els;
		el.appendChild(els);
		el.ggHorScrollVisible = false;
		el.ggVertScrollVisible = false;
		el.ggContentLeftOffset = 0;
		el.ggContentTopOffset = 0;
		hs ='';
		hs+='height : 23px;';
		hs+='left : 0px;';
		hs+='overflow : visible;';
		hs+='position : absolute;';
		hs+='top : 0px;';
		hs+='width : 168px;';
		hs+="";
		els.setAttribute('style',hs);
		me._dropdown_scrollarea0.ggScrollByX = function(diffX) {
			if(!me._dropdown_scrollarea0.ggHorScrollVisible || diffX == 0 || me._dropdown_scrollarea0.ggHPercentVisible >= 1.0) return;
			me._dropdown_scrollarea0.ggScrollPosX = (me._dropdown_scrollarea0__horScrollFg.offsetLeft + diffX);
			me._dropdown_scrollarea0.ggScrollPosX = Math.max(me._dropdown_scrollarea0.ggScrollPosX, 0);
			me._dropdown_scrollarea0.ggScrollPosX = Math.min(me._dropdown_scrollarea0.ggScrollPosX, me._dropdown_scrollarea0__horScrollBg.offsetWidth - me._dropdown_scrollarea0__horScrollFg.offsetWidth);
			me._dropdown_scrollarea0__horScrollFg.style.left = me._dropdown_scrollarea0.ggScrollPosX + 'px';
			me._dropdown_scrollarea0__content.style.left = -(Math.round(me._dropdown_scrollarea0.ggScrollPosX / me._dropdown_scrollarea0.ggHPercentVisible)) + me._dropdown_scrollarea0.ggContentLeftOffset + 'px';
			me._dropdown_scrollarea0.ggScrollPosXPercent = (me._dropdown_scrollarea0__horScrollFg.offsetLeft / me._dropdown_scrollarea0__horScrollBg.offsetWidth);
		}
		me._dropdown_scrollarea0.ggScrollByXSmooth = function(diffX) {
			if(!me._dropdown_scrollarea0.ggHorScrollVisible || diffX == 0 || me._dropdown_scrollarea0.ggHPercentVisible >= 1.0) return;
			var scrollPerInterval = diffX / 25;
			var scrollCurrX = 0;
			var id = setInterval(function() {
				scrollCurrX += scrollPerInterval;
				me._dropdown_scrollarea0.ggScrollPosX += scrollPerInterval;
				if (diffX > 0 && (scrollCurrX >= diffX || me._dropdown_scrollarea0.ggScrollPosX >= me._dropdown_scrollarea0__horScrollBg.offsetWidth - me._dropdown_scrollarea0__horScrollFg.offsetWidth)) {
					me._dropdown_scrollarea0.ggScrollPosX = Math.min(me._dropdown_scrollarea0.ggScrollPosX, me._dropdown_scrollarea0__horScrollBg.offsetWidth - me._dropdown_scrollarea0__horScrollFg.offsetWidth);
					clearInterval(id);
				}
				if (diffX < 0 && (scrollCurrX <= diffX || me._dropdown_scrollarea0.ggScrollPosX <= 0)) {
					me._dropdown_scrollarea0.ggScrollPosX = Math.max(me._dropdown_scrollarea0.ggScrollPosX, 0);
					clearInterval(id);
				}
			me._dropdown_scrollarea0__horScrollFg.style.left = me._dropdown_scrollarea0.ggScrollPosX + 'px';
			me._dropdown_scrollarea0__content.style.left = -(Math.round(me._dropdown_scrollarea0.ggScrollPosX / me._dropdown_scrollarea0.ggHPercentVisible)) + me._dropdown_scrollarea0.ggContentLeftOffset + 'px';
			me._dropdown_scrollarea0.ggScrollPosXPercent = (me._dropdown_scrollarea0__horScrollFg.offsetLeft / me._dropdown_scrollarea0__horScrollBg.offsetWidth);
			}, 10);
		}
		me._dropdown_scrollarea0.ggScrollByY = function(diffY) {
			if(!me._dropdown_scrollarea0.ggVertScrollVisible || diffY == 0 || me._dropdown_scrollarea0.ggVPercentVisible >= 1.0) return;
			me._dropdown_scrollarea0.ggScrollPosY = (me._dropdown_scrollarea0__vertScrollFg.offsetTop + diffY);
			me._dropdown_scrollarea0.ggScrollPosY = Math.max(me._dropdown_scrollarea0.ggScrollPosY, 0);
			me._dropdown_scrollarea0.ggScrollPosY = Math.min(me._dropdown_scrollarea0.ggScrollPosY, me._dropdown_scrollarea0__vertScrollBg.offsetHeight - me._dropdown_scrollarea0__vertScrollFg.offsetHeight);
			me._dropdown_scrollarea0__vertScrollFg.style.top = me._dropdown_scrollarea0.ggScrollPosY + 'px';
			me._dropdown_scrollarea0__content.style.top = -(Math.round(me._dropdown_scrollarea0.ggScrollPosY / me._dropdown_scrollarea0.ggVPercentVisible)) + me._dropdown_scrollarea0.ggContentTopOffset + 'px';
			me._dropdown_scrollarea0.ggScrollPosYPercent = (me._dropdown_scrollarea0__vertScrollFg.offsetTop / me._dropdown_scrollarea0__vertScrollBg.offsetHeight);
		}
		me._dropdown_scrollarea0.ggScrollByYSmooth = function(diffY) {
			if(!me._dropdown_scrollarea0.ggVertScrollVisible || diffY == 0 || me._dropdown_scrollarea0.ggVPercentVisible >= 1.0) return;
			var scrollPerInterval = diffY / 25;
			var scrollCurrY = 0;
			var id = setInterval(function() {
				scrollCurrY += scrollPerInterval;
				me._dropdown_scrollarea0.ggScrollPosY += scrollPerInterval;
				if (diffY > 0 && (scrollCurrY >= diffY || me._dropdown_scrollarea0.ggScrollPosY >= me._dropdown_scrollarea0__vertScrollBg.offsetHeight - me._dropdown_scrollarea0__vertScrollFg.offsetHeight)) {
					me._dropdown_scrollarea0.ggScrollPosY = Math.min(me._dropdown_scrollarea0.ggScrollPosY, me._dropdown_scrollarea0__vertScrollBg.offsetHeight - me._dropdown_scrollarea0__vertScrollFg.offsetHeight);
					clearInterval(id);
				}
				if (diffY < 0 && (scrollCurrY <= diffY || me._dropdown_scrollarea0.ggScrollPosY <= 0)) {
					me._dropdown_scrollarea0.ggScrollPosY = Math.max(me._dropdown_scrollarea0.ggScrollPosY, 0);
					clearInterval(id);
				}
			me._dropdown_scrollarea0__vertScrollFg.style.top = me._dropdown_scrollarea0.ggScrollPosY + 'px';
			me._dropdown_scrollarea0__content.style.top = -(Math.round(me._dropdown_scrollarea0.ggScrollPosY / me._dropdown_scrollarea0.ggVPercentVisible)) + me._dropdown_scrollarea0.ggContentTopOffset + 'px';
			me._dropdown_scrollarea0.ggScrollPosYPercent = (me._dropdown_scrollarea0__vertScrollFg.offsetTop / me._dropdown_scrollarea0__vertScrollBg.offsetHeight);
			}, 10);
		}
		me._dropdown_scrollarea0.ggScrollIntoView = function(posX, posY, width, height) {
			if (me._dropdown_scrollarea0.ggHorScrollVisible) {
				if (posX < 0) {
					var diffX = Math.floor(posX * me._dropdown_scrollarea0.ggHPercentVisible);
					me._dropdown_scrollarea0.ggScrollByXSmooth(diffX);
				} else if (posX + width > me._dropdown_scrollarea0.offsetWidth - (me._dropdown_scrollarea0.ggVertScrollVisible ? 15 : 0)) {
					var diffX = Math.ceil(((posX + width) - (me._dropdown_scrollarea0.offsetWidth - (me._dropdown_scrollarea0.ggVertScrollVisible ? 15 : 0))) * me._dropdown_scrollarea0.ggHPercentVisible);
					me._dropdown_scrollarea0.ggScrollByXSmooth(diffX);
				}
			}
			if (me._dropdown_scrollarea0.ggVertScrollVisible) {
				if (posY < 0) {
					var diffY = Math.floor(posY * me._dropdown_scrollarea0.ggVPercentVisible);
					me._dropdown_scrollarea0.ggScrollByYSmooth(diffY);
				} else if (posY + height > me._dropdown_scrollarea0.offsetHeight - (me._dropdown_scrollarea0.ggHorScrollVisible ? 15 : 0)) {
					var diffY = Math.ceil(((posY + height) - (me._dropdown_scrollarea0.offsetHeight - (me._dropdown_scrollarea0.ggHorScrollVisible ? 15 : 0))) * me._dropdown_scrollarea0.ggVPercentVisible);
					me._dropdown_scrollarea0.ggScrollByYSmooth(diffY);
				}
			}
		}
		els.ontouchstart = function(e) {
			e = e || window.event;
			var t = e.touches;
			me._dropdown_scrollarea0.ggDragLastX = t[0].clientX;
			me._dropdown_scrollarea0.ggDragLastY = t[0].clientY;
			me._dropdown_scrollarea0__content.ontouchend = function() {
				let inertiaInterval = setInterval(function() {
					me._dropdown_scrollarea0.ggDragInertiaX *= 0.65;
					me._dropdown_scrollarea0.ggDragInertiaY *= 0.65;
					me._dropdown_scrollarea0.ggScrollByX(-me._dropdown_scrollarea0.ggDragInertiaX);
					me._dropdown_scrollarea0.ggScrollByY(-me._dropdown_scrollarea0.ggDragInertiaY);
					if (Math.abs(me._dropdown_scrollarea0.ggDragInertiaX) < 1.0 && Math.abs(me._dropdown_scrollarea0.ggDragInertiaY) < 1.0) {
						clearInterval(inertiaInterval);
					}
					}, 50);
				me._dropdown_scrollarea0__content.ontouchend = null;
				me._dropdown_scrollarea0__content.ontouchmove = null;
			}
			me._dropdown_scrollarea0__content.ontouchmove = function(e) {
				e = e || window.event;
				e.preventDefault();
				var t = e.touches;
				var diffX = t[0].clientX - me._dropdown_scrollarea0.ggDragLastX;
				var diffY = t[0].clientY - me._dropdown_scrollarea0.ggDragLastY;
				me._dropdown_scrollarea0.ggDragInertiaX = diffX;
				me._dropdown_scrollarea0.ggDragInertiaY = diffY;
				me._dropdown_scrollarea0.ggDragLastX = t[0].clientX;
				me._dropdown_scrollarea0.ggDragLastY = t[0].clientY;
				me._dropdown_scrollarea0.ggScrollByX(-diffX);
				me._dropdown_scrollarea0.ggScrollByY(-diffY);
			}
		}
		elVertScrollBg = me._dropdown_scrollarea0__vertScrollBg = document.createElement('div');
		el.appendChild(elVertScrollBg);
		elVertScrollBg.setAttribute('style', 'position: absolute; right: 0px; top: 0px; visibility: hidden; width: 15px; height: 73px; background-color: rgba(128,128,128,0); pointer-events: auto;');
		elVertScrollBg.className='ggskin ggskin_scrollarea_vscrollbg';
		elVertScrollFg = me._dropdown_scrollarea0__vertScrollFg = document.createElement('div');
		elVertScrollBg.appendChild(elVertScrollFg);
		elVertScrollFg.setAttribute('style', 'position: absolute; left: 0px; top: 0px; visibility: hidden; width: 15px; height: 73px; background-color: rgba(255,255,255,1); pointer-events: auto;');
		elVertScrollFg.className='ggskin ggskin_scrollarea_vscrollfg';
		me._dropdown_scrollarea0.ggScrollPosY = 0;
		me._dropdown_scrollarea0.ggScrollPosYPercent = 0.0;
		elVertScrollFg.onmousedown = function(e) {
			e = e || window.event;
			e.preventDefault();
			e.stopPropagation();
			me._dropdown_scrollarea0.ggDragLastY = e.clientY;
			document.onmouseup = function() {
				let inertiaInterval = setInterval(function() {
					me._dropdown_scrollarea0.ggDragInertiaY *= 0.65;
					me._dropdown_scrollarea0.ggScrollByY(me._dropdown_scrollarea0.ggDragInertiaY);
					if (Math.abs(me._dropdown_scrollarea0.ggDragInertiaY) < 1.0) {
						clearInterval(inertiaInterval);
					}
					}, 50);
				document.onmouseup = null;
				document.onmousemove = null;
			}
			document.onmousemove = function(e) {
				e = e || window.event;
				e.preventDefault();
				var diffY = e.clientY - me._dropdown_scrollarea0.ggDragLastY;
				me._dropdown_scrollarea0.ggDragInertiaY = diffY;
				me._dropdown_scrollarea0.ggDragLastY = e.clientY;
				me._dropdown_scrollarea0.ggScrollByY(diffY);
			}
		}
		elVertScrollFg.ontouchstart = function(e) {
			e = e || window.event;
			e.preventDefault();
			e.stopPropagation();
			var t = e.touches;
			me._dropdown_scrollarea0.ggDragLastY = t[0].clientY;
			document.ontouchend = function() {
				let inertiaInterval = setInterval(function() {
					me._dropdown_scrollarea0.ggDragInertiaY *= 0.65;
					me._dropdown_scrollarea0.ggScrollByY(me._dropdown_scrollarea0.ggDragInertiaY);
					if (Math.abs(me._dropdown_scrollarea0.ggDragInertiaY) < 1.0) {
						clearInterval(inertiaInterval);
					}
					}, 50);
				document.ontouchend = null;
				document.ontouchmove = null;
			}
			document.ontouchmove = function(e) {
				e = e || window.event;
				e.preventDefault();
				var t = e.touches;
				var diffY = t[0].clientY - me._dropdown_scrollarea0.ggDragLastY;
				me._dropdown_scrollarea0.ggDragInertiaY = diffY;
				me._dropdown_scrollarea0.ggDragLastY = t[0].clientY;
				me._dropdown_scrollarea0.ggScrollByY(diffY);
			}
		}
		elVertScrollBg.onmousedown = function(e) {
			e = e || window.event;
			e.preventDefault();
			var diffY = me._dropdown_scrollarea0.ggScrollHeight;
			if (e.offsetY < me._dropdown_scrollarea0.ggScrollPosY) {
				diffY = diffY * -1;
			}
			me._dropdown_scrollarea0.ggScrollByYSmooth(diffY);
		}
		elVertScrollBg.ontouchstart = function(e) {
			e = e || window.event;
			e.preventDefault();
			e.stopPropagation();
			var t = e.touches;
			var rect = me._dropdown_scrollarea0__vertScrollBg.getBoundingClientRect();
			var diffY = me._dropdown_scrollarea0.ggScrollHeight;
			if ((t[0].clientY - rect.top) < me._dropdown_scrollarea0.ggScrollPosY) {
				diffY = diffY * -1;
			}
			me._dropdown_scrollarea0.ggScrollByYSmooth(diffY);
		}
		el.addEventListener('wheel', function(e) {
			e.preventDefault();
			var wheelDelta = Math.sign(e.deltaY);
			me._dropdown_scrollarea0.ggScrollByYSmooth(20 * wheelDelta);
		});
		elCornerBg = me._dropdown_scrollarea0__cornerBg = document.createElement('div');
		el.appendChild(elCornerBg);
		elCornerBg.setAttribute('style', 'position: absolute; right: 0px; bottom: 0px; visibility: hidden; width: 15px; height: 15px; background-color: rgba(255,255,255,1);');
		elCornerBg.className='ggskin ggskin_scrollarea_scrollcorner';
		el.ggId="Dropdown Scrollarea";
		el.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		el.ggVisible=true;
		el.className="ggskin ggskin_scrollarea ";
		el.ggType='scrollarea';
		hs ='';
		hs+='border : 1px solid rgba(0, 0, 0, 0);';
		hs+='cursor : pointer;';
		hs+='height : 73px;';
		hs+='left : 0px;';
		hs+='overflow : hidden;';
		hs+='position : absolute;';
		hs+='top : 0px;';
		hs+='visibility : inherit;';
		hs+='width : 150px;';
		hs+='pointer-events:auto;';
		hs+='<style> .dropdown { position: relative; display: inline-block; } .dropdown-content { display: none; position: absolute; background-color: #f9f9f9; min-width: 160px; box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2); padding: 12px 16px; z-index: 1; } .dropdown:hover .dropdown-content { display: block; } <\/style> <div class=\"dropdown\"> <span>Mouse over me<\/span> <div class=\"dropdown-content\"> <p>Hello World!<\/p> <\/div> <\/div>';
		el.setAttribute('style',hs);
		el.style[domTransform + 'Origin']='50% 50%';
		me._dropdown_scrollarea0.ggIsActive=function() {
			if ((this.parentNode) && (this.parentNode.ggIsActive)) {
				return this.parentNode.ggIsActive();
			}
			return false;
		}
		el.ggElementNodeId=function() {
			if ((this.parentNode) && (this.parentNode.ggElementNodeId)) {
				return this.parentNode.ggElementNodeId();
			}
			return player.getCurrentNode();
		}
		me._dropdown_scrollarea0.ggUpdatePosition=function (useTransition) {
			{
				var horScrollWasVisible = this.ggHorScrollVisible;
				var vertScrollWasVisible = this.ggVertScrollVisible;
				this.ggContent.style.left = '0px';
				this.ggContent.style.top = '0px';
				this.ggContentLeftOffset = 0;
				this.ggContentTopOffset = 0;
				var offsetWidthWithScale = this.getBoundingClientRect().width;
				var offsetHeightWithScale = this.getBoundingClientRect().height;
				var domRectContent = this.ggContent.getBoundingClientRect();
				var minX = 0;
				var minY = 0;
				var maxX = 0;
				var maxY = 0;
				var stack=[];
				stack.push(this.ggContent);
				while(stack.length>0) {
					var e=stack.pop();
					if (e!=this.ggContent && e.getBoundingClientRect && e.style['display']!='none') {
						var domRectChild = e.getBoundingClientRect();
						var diffX = domRectChild.left - domRectContent.left;
						minX = Math.min(minX, diffX);
						maxX = Math.max(maxX, diffX + domRectChild.width);
						var diffY = domRectChild.top - domRectContent.top;
						minY = Math.min(minY, diffY);
						maxY = Math.max(maxY, diffY + domRectChild.height);
					}
					if (e.hasChildNodes() && e.style['display']!='none') {
						for(var i=0;i<e.childNodes.length;i++) {
							stack.push(e.childNodes[i]);
						}
					}
				}
				if (minX < 0) this.ggContentLeftOffset = -minX;
				if (minY < 0) this.ggContentTopOffset = -minY;
				var contentWidth = maxX - minX;
				var contentHeight = maxY - minY;
				this.ggContent.style.left = this.ggContentLeftOffset + 'px';
				this.ggContent.style.top = this.ggContentTopOffset + 'px';
				this.ggContent.style.width = contentWidth + 'px';
				this.ggContent.style.height = contentHeight + 'px';
				this.ggContent.style.left = this.ggContentLeftOffset + 'px';
				this.ggContent.style.marginLeft = '0px';
				this.ggContent.style.top = -(Math.round(me._dropdown_scrollarea0.ggScrollPosY / me._dropdown_scrollarea0.ggVPercentVisible)) + this.ggContentTopOffset + 'px';
				this.ggContent.style.marginTop = '0px';
				if ((me._dropdown_scrollarea0.ggHorScrollVisible && contentHeight > this.offsetHeight - 15) || (!me._dropdown_scrollarea0.ggHorScrollVisible && contentHeight > this.offsetHeight)) {
					me._dropdown_scrollarea0__vertScrollBg.style.visibility = 'inherit';
					me._dropdown_scrollarea0__vertScrollFg.style.visibility = 'inherit';
					me._dropdown_scrollarea0.ggVertScrollVisible = true;
				} else {
					me._dropdown_scrollarea0__vertScrollBg.style.visibility = 'hidden';
					me._dropdown_scrollarea0__vertScrollFg.style.visibility = 'hidden';
					me._dropdown_scrollarea0.ggVertScrollVisible = false;
				}
				if(me._dropdown_scrollarea0.ggVertScrollVisible) {
					me._dropdown_scrollarea0.ggAvailableWidth = me._dropdown_scrollarea0.offsetWidth - 15;
					if (me._dropdown_scrollarea0.ggHorScrollVisible) {
						me._dropdown_scrollarea0.ggAvailableHeight = me._dropdown_scrollarea0.offsetHeight - 15;
						me._dropdown_scrollarea0.ggAvailableHeightWithScale = me._dropdown_scrollarea0.getBoundingClientRect().height - me._dropdown_scrollarea0__vertScrollBg.getBoundingClientRect().width;
						me._dropdown_scrollarea0__cornerBg.style.visibility = 'inherit';
					} else {
						me._dropdown_scrollarea0.ggAvailableHeight = me._dropdown_scrollarea0.offsetHeight;
						me._dropdown_scrollarea0.ggAvailableHeightWithScale = me._dropdown_scrollarea0.getBoundingClientRect().height;
						me._dropdown_scrollarea0__cornerBg.style.visibility = 'hidden';
					}
					me._dropdown_scrollarea0__vertScrollBg.style.height = me._dropdown_scrollarea0.ggAvailableHeight + 'px';
					me._dropdown_scrollarea0.ggVPercentVisible = contentHeight != 0 ? me._dropdown_scrollarea0.ggAvailableHeightWithScale / contentHeight : 0.0;
					if (me._dropdown_scrollarea0.ggVPercentVisible > 1.0) me._dropdown_scrollarea0.ggVPercentVisible = 1.0;
					me._dropdown_scrollarea0.ggScrollHeight =  Math.round(me._dropdown_scrollarea0__vertScrollBg.offsetHeight * me._dropdown_scrollarea0.ggVPercentVisible);
					me._dropdown_scrollarea0__vertScrollFg.style.height = me._dropdown_scrollarea0.ggScrollHeight + 'px';
					me._dropdown_scrollarea0.ggScrollPosY = me._dropdown_scrollarea0.ggScrollPosYPercent * me._dropdown_scrollarea0.ggAvailableHeight;
					me._dropdown_scrollarea0.ggScrollPosY = Math.min(me._dropdown_scrollarea0.ggScrollPosY, me._dropdown_scrollarea0__vertScrollBg.offsetHeight - me._dropdown_scrollarea0__vertScrollFg.offsetHeight);
					me._dropdown_scrollarea0__vertScrollFg.style.top = me._dropdown_scrollarea0.ggScrollPosY + 'px';
					if (me._dropdown_scrollarea0.ggVPercentVisible < 1.0) {
						me._dropdown_scrollarea0__content.style.top = -(Math.round(me._dropdown_scrollarea0.ggScrollPosY / me._dropdown_scrollarea0.ggVPercentVisible)) + this.ggContentTopOffset + 'px';
					}
				} else {
					me._dropdown_scrollarea0.ggAvailableWidth = me._dropdown_scrollarea0.offsetWidth;
					me._dropdown_scrollarea0.ggScrollPosY = 0;
					me._dropdown_scrollarea0.ggScrollPosYPercent = 0.0;
					me._dropdown_scrollarea0__content.style.top = this.ggContentTopOffset + 'px';
					me._dropdown_scrollarea0__cornerBg.style.visibility = 'hidden';
				}
				if(horScrollWasVisible != me._dropdown_scrollarea0.ggHorScrollVisible || vertScrollWasVisible != me._dropdown_scrollarea0.ggVertScrollVisible) {
					me.updateSize(me._dropdown_scrollarea0);
					me._dropdown_scrollarea0.ggUpdatePosition();
				}
			}
		}
		el=me._dropdown_cloner0=document.createElement('div');
		el.ggNumRepeat = 1;
		el.ggNumRows = 0;
		el.ggNumCols = 0;
		el.ggWidth = 169;
		el.ggHeight = 24;
		el.ggUpdating = false;
		el.ggFilter = [];
		el.ggInstances = [];
		me._dropdown_cloner0.callChildLogicBlocks_mouseover = function(){
			if(me._dropdown_cloner0.ggInstances) {
				var i;
				for(i = 0; i < me._dropdown_cloner0.ggInstances.length; i++) {
					if (me._dropdown_cloner0.ggInstances[i]._dropdown_menu_text0 && me._dropdown_cloner0.ggInstances[i]._dropdown_menu_text0.logicBlock_backgroundcolor) {
						me._dropdown_cloner0.ggInstances[i]._dropdown_menu_text0.logicBlock_backgroundcolor();
					}
				}
			}
		}
		me._dropdown_cloner0.callChildLogicBlocks_active = function(){
			if(me._dropdown_cloner0.ggInstances) {
				var i;
				for(i = 0; i < me._dropdown_cloner0.ggInstances.length; i++) {
					if (me._dropdown_cloner0.ggInstances[i]._dropdown_menu_text0 && me._dropdown_cloner0.ggInstances[i]._dropdown_menu_text0.logicBlock_backgroundcolor) {
						me._dropdown_cloner0.ggInstances[i]._dropdown_menu_text0.logicBlock_backgroundcolor();
					}
					if (me._dropdown_cloner0.ggInstances[i]._dropdown_checkmark0 && me._dropdown_cloner0.ggInstances[i]._dropdown_checkmark0.logicBlock_alpha) {
						me._dropdown_cloner0.ggInstances[i]._dropdown_checkmark0.logicBlock_alpha();
					}
				}
			}
		}
		me._dropdown_cloner0.callChildLogicBlocks_changevisitednodes = function(){
			if(me._dropdown_cloner0.ggInstances) {
				var i;
				for(i = 0; i < me._dropdown_cloner0.ggInstances.length; i++) {
					if (me._dropdown_cloner0.ggInstances[i]._dropdown_checkmark0 && me._dropdown_cloner0.ggInstances[i]._dropdown_checkmark0.logicBlock_alpha) {
						me._dropdown_cloner0.ggInstances[i]._dropdown_checkmark0.logicBlock_alpha();
					}
				}
			}
		}
		el.ggUpdate = function(filter) {
			if(me._dropdown_cloner0.ggUpdating == true) return;
			me._dropdown_cloner0.ggUpdating = true;
			var el=me._dropdown_cloner0;
			var curNumCols = 0;
			curNumCols = me._dropdown_cloner0.ggNumRepeat;
			if (curNumCols < 1) curNumCols = 1;
			if (typeof filter=='object') {
				el.ggFilter = filter;
			} else {
				filter = el.ggFilter;
			};
			if (me.ggTag) filter.push(me.ggTag);
			filter=filter.sort();
			if ((el.ggNumCols == curNumCols) && (el.ggInstances.length > 0) && (filter.length === el.ggCurrentFilter.length) && (filter.every(function(value, index) { return value === el.ggCurrentFilter[index] }) )) {
				me._dropdown_cloner0.ggUpdating = false;
				return;
			} else {
				el.ggNumRows = 1;
				el.ggNumCols = curNumCols;
			}
			el.ggCurrentFilter = filter;
			el.ggInstances = [];
			if (el.hasChildNodes() == true) {
				while (el.firstChild) {
					el.removeChild(el.firstChild);
				}
			}
			var tourNodes = player.getNodeIds();
			var row = 0;
			var column = 0;
			var currentIndex = 0;
			for (var i=0; i < tourNodes.length; i++) {
				var nodeId = tourNodes[i];
				var passed = true;
				var nodeData = player.getNodeUserdata(nodeId);
				if (filter.length > 0) {
					for (var j=0; j < filter.length; j++) {
						if (nodeData['tags'].indexOf(filter[j]) == -1) passed = false;
					}
				}
				if (passed) {
				var parameter={};
				parameter.top=(row * me._dropdown_cloner0.ggHeight) + 'px';
				parameter.left=(column * me._dropdown_cloner0.ggWidth) + 'px';
				parameter.index=currentIndex;
				parameter.title=nodeData['title'];
				var inst = new SkinCloner_dropdown_cloner0_Class(nodeId, me, el, parameter);
				currentIndex++;
				el.ggInstances.push(inst);
				el.appendChild(inst.__div);
				inst.__div.ggObj=inst;
				skin.updateSize(inst.__div);
				column++;
				if (column >= el.ggNumCols) {
					column = 0;
					row++;
					el.ggNumRows++;
				}
				}
			}
			me._dropdown_cloner0.callChildLogicBlocks_mouseover();
			me._dropdown_cloner0.callChildLogicBlocks_active();
			me._dropdown_cloner0.callChildLogicBlocks_changevisitednodes();
			me._dropdown_cloner0.ggUpdating = false;
			player.triggerEvent('clonerchanged');
			if (me._dropdown_cloner0.parentNode.classList.contains('ggskin_subelement') && me._dropdown_cloner0.parentNode.parentNode.classList.contains('ggskin_scrollarea')) me._dropdown_cloner0.parentNode.parentNode.ggUpdatePosition();
		}
		el.ggFilter = [];
		el.ggId="Dropdown Cloner";
		el.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		el.ggVisible=true;
		el.className="ggskin ggskin_cloner ";
		el.ggType='cloner';
		hs ='';
		hs+='height : 24px;';
		hs+='left : 0px;';
		hs+='overflow : visible;';
		hs+='position : absolute;';
		hs+='top : 0px;';
		hs+='visibility : inherit;';
		hs+='width : 169px;';
		hs+='pointer-events:none;';
		el.setAttribute('style',hs);
		el.style[domTransform + 'Origin']='50% 50%';
		me._dropdown_cloner0.ggIsActive=function() {
			if ((this.parentNode) && (this.parentNode.ggIsActive)) {
				return this.parentNode.ggIsActive();
			}
			return false;
		}
		el.ggElementNodeId=function() {
			if ((this.parentNode) && (this.parentNode.ggElementNodeId)) {
				return this.parentNode.ggElementNodeId();
			}
			return player.getCurrentNode();
		}
		me._dropdown_cloner0.ggUpdateConditionNodeChange=function () {
			var cnode=player.getCurrentNode();
			for(var i=0; i<me._dropdown_cloner0.childNodes.length; i++) {
				var child=me._dropdown_cloner0.childNodes[i];
				if (child.ggObj && child.ggObj.ggNodeId==cnode) {
			        var childOffX = child.offsetLeft;
			        var childOffY = child.offsetTop;
					var p = child.parentElement;
			        while (p != null && p!==this.divSkin) {
						if (p.ggType && p.ggType == 'scrollarea') {
							p.ggScrollIntoView(childOffX, childOffY, child.clientWidth, child.clientHeight);
						}
						childOffX += p.offsetLeft;
						childOffY += p.offsetTop;
						p = p.parentElement;
					}
				}
			}
		}
		me._dropdown_cloner0.ggUpdatePosition=function (useTransition) {
				me._dropdown_cloner0.ggUpdate();
		}
		me._dropdown_cloner0.ggNodeChange=function () {
			me._dropdown_cloner0.ggUpdateConditionNodeChange();
		}
		me._dropdown_scrollarea0__content.appendChild(me._dropdown_cloner0);
		me._dropdown_background0.appendChild(me._dropdown_scrollarea0);
		me._drop_play.appendChild(me._dropdown_background0);
		el=me._dropdown_menu_title_background0=document.createElement('div');
		el.ggId="Dropdown Menu Title Background";
		el.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		el.ggVisible=true;
		el.className="ggskin ggskin_rectangle ";
		el.ggType='rectangle';
		hs ='';
		hs+=cssPrefix + 'border-radius : 1px;';
		hs+='border-radius : 1px;';
		hs+='border : 1px solid #ffffff;';
		hs+='cursor : pointer;';
		hs+='height : 30px;';
		hs+='left : 0px;';
		hs+='position : absolute;';
		hs+='top : 0px;';
		hs+='visibility : inherit;';
		hs+='width : 150px;';
		hs+='pointer-events:auto;';
		el.setAttribute('style',hs);
		el.style[domTransform + 'Origin']='50% 50%';
		me._dropdown_menu_title_background0.ggIsActive=function() {
			if ((this.parentNode) && (this.parentNode.ggIsActive)) {
				return this.parentNode.ggIsActive();
			}
			return false;
		}
		el.ggElementNodeId=function() {
			if ((this.parentNode) && (this.parentNode.ggElementNodeId)) {
				return this.parentNode.ggElementNodeId();
			}
			return player.getCurrentNode();
		}
		me._dropdown_menu_title_background0.onclick=function (e) {
			me._dropdown_background0.ggVisible = !me._dropdown_background0.ggVisible;
			var flag=me._dropdown_background0.ggVisible;
			me._dropdown_background0.style[domTransition]='none';
			me._dropdown_background0.style.visibility=((flag)&&(Number(me._dropdown_background0.style.opacity)>0||!me._dropdown_background0.style.opacity))?'inherit':'hidden';
		}
		me._dropdown_menu_title_background0.ggUpdatePosition=function (useTransition) {
		}
		el=me._dropdown_menu_title0=document.createElement('div');
		els=me._dropdown_menu_title0__text=document.createElement('div');
		el.className='ggskin ggskin_textdiv';
		el.ggTextDiv=els;
		el.ggId="Dropdown Menu Title";
		el.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		el.ggVisible=true;
		el.className="ggskin ggskin_text ";
		el.ggType='text';
		hs ='';
		hs+='height : 30px;';
		hs+='left : -2px;';
		hs+='position : absolute;';
		hs+='top : 5px;';
		hs+='visibility : inherit;';
		hs+='width : 150px;';
		hs+='pointer-events:none;';
		hs+='font-weight: bold;';
		el.setAttribute('style',hs);
		el.style[domTransform + 'Origin']='50% 50%';
		hs ='position:absolute;';
		hs += 'box-sizing: border-box;';
		hs+='cursor: default;';
		hs+='left: 0px;';
		hs+='top:  0px;';
		hs+='width: auto;';
		hs+='height: auto;';
		hs+='pointer-events: none;';
		hs+='border: 0px solid #000000;';
		hs+='border-radius: 5px;';
		hs+=cssPrefix + 'border-radius: 5px;';
		hs+='color: rgba(255,255,255,1);';
		hs+='font-size: 12px;';
		hs+='font-weight: bold;';
		hs+='text-align: center;';
		hs+='white-space: nowrap;';
		hs+='padding: 1px 2px 1px 2px;';
		hs+='overflow: hidden;';
		els.setAttribute('style',hs);
		me._dropdown_menu_title0.ggUpdateText=function() {
			var hs=me.ggUserdata.title+"PLAY";
			if (hs!=this.ggText) {
				this.ggText=hs;
				this.ggTextDiv.innerHTML=hs;
				if (this.ggUpdatePosition) this.ggUpdatePosition();
			}
		}
		me._dropdown_menu_title0.ggUpdateText();
		player.addListener('changenode', function() {
			me._dropdown_menu_title0.ggUpdateText();
		});
		el.appendChild(els);
		me._dropdown_menu_title0.ggIsActive=function() {
			if ((this.parentNode) && (this.parentNode.ggIsActive)) {
				return this.parentNode.ggIsActive();
			}
			return false;
		}
		el.ggElementNodeId=function() {
			if ((this.parentNode) && (this.parentNode.ggElementNodeId)) {
				return this.parentNode.ggElementNodeId();
			}
			return player.getCurrentNode();
		}
		me._dropdown_menu_title0.ggUpdatePosition=function (useTransition) {
			this.style[domTransition]='left 0';
			this.ggTextDiv.style.left=((148-this.ggTextDiv.offsetWidth)/2) + 'px';
		}
		me._dropdown_menu_title_background0.appendChild(me._dropdown_menu_title0);
		me._drop_play.appendChild(me._dropdown_menu_title_background0);
		me.divSkin.appendChild(me._drop_play);
		el=me._drop_live=document.createElement('div');
		el.ggId="DROP LIVE";
		el.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		el.ggVisible=true;
		el.className="ggskin ggskin_container ";
		el.ggType='container';
		hs ='';
		hs+='height : 142px;';
		hs+='left : 243px;';
		hs+='overflow : hidden;';
		hs+='position : absolute;';
		hs+='top : 29px;';
		hs+='visibility : inherit;';
		hs+='width : 153px;';
		hs+='pointer-events:none;';
		el.setAttribute('style',hs);
		el.style[domTransform + 'Origin']='50% 50%';
		me._drop_live.ggIsActive=function() {
			return false;
		}
		el.ggElementNodeId=function() {
			return player.getCurrentNode();
		}
		me._drop_live.onclick=function (e) {
			player.openNext("{node2}","");
		}
		me._drop_live.ggUpdatePosition=function (useTransition) {
		}
		el=me._dropdown_background=document.createElement('div');
		el.ggId="Dropdown Background";
		el.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		el.ggVisible=false;
		el.className="ggskin ggskin_rectangle ";
		el.ggType='rectangle';
		hs ='';
		hs+='background : rgba(128,128,128,0.784314);';
		hs+='border : 0px solid #ffffff;';
		hs+='cursor : default;';
		hs+='height : 30px;';
		hs+='left : 1px;';
		hs+='position : absolute;';
		hs+='top : 34px;';
		hs+='visibility : hidden;';
		hs+='width : 150px;';
		hs+='pointer-events:auto;';
		el.setAttribute('style',hs);
		el.style[domTransform + 'Origin']='50% 50%';
		me._dropdown_background.ggIsActive=function() {
			if ((this.parentNode) && (this.parentNode.ggIsActive)) {
				return this.parentNode.ggIsActive();
			}
			return false;
		}
		el.ggElementNodeId=function() {
			if ((this.parentNode) && (this.parentNode.ggElementNodeId)) {
				return this.parentNode.ggElementNodeId();
			}
			return player.getCurrentNode();
		}
		me._dropdown_background.ggUpdatePosition=function (useTransition) {
		}
		el=me._dropdown_scrollarea=document.createElement('div');
		els=me._dropdown_scrollarea__content=document.createElement('div');
		els.className='ggskin ggskin_subelement ggskin_scrollarea';
		el.ggContent=els;
		el.appendChild(els);
		el.ggHorScrollVisible = false;
		el.ggVertScrollVisible = false;
		el.ggContentLeftOffset = 0;
		el.ggContentTopOffset = 0;
		hs ='';
		hs+='height : 23px;';
		hs+='left : 0px;';
		hs+='overflow : visible;';
		hs+='position : absolute;';
		hs+='top : 0px;';
		hs+='width : 168px;';
		hs+="";
		els.setAttribute('style',hs);
		me._dropdown_scrollarea.ggScrollByX = function(diffX) {
			if(!me._dropdown_scrollarea.ggHorScrollVisible || diffX == 0 || me._dropdown_scrollarea.ggHPercentVisible >= 1.0) return;
			me._dropdown_scrollarea.ggScrollPosX = (me._dropdown_scrollarea__horScrollFg.offsetLeft + diffX);
			me._dropdown_scrollarea.ggScrollPosX = Math.max(me._dropdown_scrollarea.ggScrollPosX, 0);
			me._dropdown_scrollarea.ggScrollPosX = Math.min(me._dropdown_scrollarea.ggScrollPosX, me._dropdown_scrollarea__horScrollBg.offsetWidth - me._dropdown_scrollarea__horScrollFg.offsetWidth);
			me._dropdown_scrollarea__horScrollFg.style.left = me._dropdown_scrollarea.ggScrollPosX + 'px';
			me._dropdown_scrollarea__content.style.left = -(Math.round(me._dropdown_scrollarea.ggScrollPosX / me._dropdown_scrollarea.ggHPercentVisible)) + me._dropdown_scrollarea.ggContentLeftOffset + 'px';
			me._dropdown_scrollarea.ggScrollPosXPercent = (me._dropdown_scrollarea__horScrollFg.offsetLeft / me._dropdown_scrollarea__horScrollBg.offsetWidth);
		}
		me._dropdown_scrollarea.ggScrollByXSmooth = function(diffX) {
			if(!me._dropdown_scrollarea.ggHorScrollVisible || diffX == 0 || me._dropdown_scrollarea.ggHPercentVisible >= 1.0) return;
			var scrollPerInterval = diffX / 25;
			var scrollCurrX = 0;
			var id = setInterval(function() {
				scrollCurrX += scrollPerInterval;
				me._dropdown_scrollarea.ggScrollPosX += scrollPerInterval;
				if (diffX > 0 && (scrollCurrX >= diffX || me._dropdown_scrollarea.ggScrollPosX >= me._dropdown_scrollarea__horScrollBg.offsetWidth - me._dropdown_scrollarea__horScrollFg.offsetWidth)) {
					me._dropdown_scrollarea.ggScrollPosX = Math.min(me._dropdown_scrollarea.ggScrollPosX, me._dropdown_scrollarea__horScrollBg.offsetWidth - me._dropdown_scrollarea__horScrollFg.offsetWidth);
					clearInterval(id);
				}
				if (diffX < 0 && (scrollCurrX <= diffX || me._dropdown_scrollarea.ggScrollPosX <= 0)) {
					me._dropdown_scrollarea.ggScrollPosX = Math.max(me._dropdown_scrollarea.ggScrollPosX, 0);
					clearInterval(id);
				}
			me._dropdown_scrollarea__horScrollFg.style.left = me._dropdown_scrollarea.ggScrollPosX + 'px';
			me._dropdown_scrollarea__content.style.left = -(Math.round(me._dropdown_scrollarea.ggScrollPosX / me._dropdown_scrollarea.ggHPercentVisible)) + me._dropdown_scrollarea.ggContentLeftOffset + 'px';
			me._dropdown_scrollarea.ggScrollPosXPercent = (me._dropdown_scrollarea__horScrollFg.offsetLeft / me._dropdown_scrollarea__horScrollBg.offsetWidth);
			}, 10);
		}
		me._dropdown_scrollarea.ggScrollByY = function(diffY) {
			if(!me._dropdown_scrollarea.ggVertScrollVisible || diffY == 0 || me._dropdown_scrollarea.ggVPercentVisible >= 1.0) return;
			me._dropdown_scrollarea.ggScrollPosY = (me._dropdown_scrollarea__vertScrollFg.offsetTop + diffY);
			me._dropdown_scrollarea.ggScrollPosY = Math.max(me._dropdown_scrollarea.ggScrollPosY, 0);
			me._dropdown_scrollarea.ggScrollPosY = Math.min(me._dropdown_scrollarea.ggScrollPosY, me._dropdown_scrollarea__vertScrollBg.offsetHeight - me._dropdown_scrollarea__vertScrollFg.offsetHeight);
			me._dropdown_scrollarea__vertScrollFg.style.top = me._dropdown_scrollarea.ggScrollPosY + 'px';
			me._dropdown_scrollarea__content.style.top = -(Math.round(me._dropdown_scrollarea.ggScrollPosY / me._dropdown_scrollarea.ggVPercentVisible)) + me._dropdown_scrollarea.ggContentTopOffset + 'px';
			me._dropdown_scrollarea.ggScrollPosYPercent = (me._dropdown_scrollarea__vertScrollFg.offsetTop / me._dropdown_scrollarea__vertScrollBg.offsetHeight);
		}
		me._dropdown_scrollarea.ggScrollByYSmooth = function(diffY) {
			if(!me._dropdown_scrollarea.ggVertScrollVisible || diffY == 0 || me._dropdown_scrollarea.ggVPercentVisible >= 1.0) return;
			var scrollPerInterval = diffY / 25;
			var scrollCurrY = 0;
			var id = setInterval(function() {
				scrollCurrY += scrollPerInterval;
				me._dropdown_scrollarea.ggScrollPosY += scrollPerInterval;
				if (diffY > 0 && (scrollCurrY >= diffY || me._dropdown_scrollarea.ggScrollPosY >= me._dropdown_scrollarea__vertScrollBg.offsetHeight - me._dropdown_scrollarea__vertScrollFg.offsetHeight)) {
					me._dropdown_scrollarea.ggScrollPosY = Math.min(me._dropdown_scrollarea.ggScrollPosY, me._dropdown_scrollarea__vertScrollBg.offsetHeight - me._dropdown_scrollarea__vertScrollFg.offsetHeight);
					clearInterval(id);
				}
				if (diffY < 0 && (scrollCurrY <= diffY || me._dropdown_scrollarea.ggScrollPosY <= 0)) {
					me._dropdown_scrollarea.ggScrollPosY = Math.max(me._dropdown_scrollarea.ggScrollPosY, 0);
					clearInterval(id);
				}
			me._dropdown_scrollarea__vertScrollFg.style.top = me._dropdown_scrollarea.ggScrollPosY + 'px';
			me._dropdown_scrollarea__content.style.top = -(Math.round(me._dropdown_scrollarea.ggScrollPosY / me._dropdown_scrollarea.ggVPercentVisible)) + me._dropdown_scrollarea.ggContentTopOffset + 'px';
			me._dropdown_scrollarea.ggScrollPosYPercent = (me._dropdown_scrollarea__vertScrollFg.offsetTop / me._dropdown_scrollarea__vertScrollBg.offsetHeight);
			}, 10);
		}
		me._dropdown_scrollarea.ggScrollIntoView = function(posX, posY, width, height) {
			if (me._dropdown_scrollarea.ggHorScrollVisible) {
				if (posX < 0) {
					var diffX = Math.floor(posX * me._dropdown_scrollarea.ggHPercentVisible);
					me._dropdown_scrollarea.ggScrollByXSmooth(diffX);
				} else if (posX + width > me._dropdown_scrollarea.offsetWidth - (me._dropdown_scrollarea.ggVertScrollVisible ? 15 : 0)) {
					var diffX = Math.ceil(((posX + width) - (me._dropdown_scrollarea.offsetWidth - (me._dropdown_scrollarea.ggVertScrollVisible ? 15 : 0))) * me._dropdown_scrollarea.ggHPercentVisible);
					me._dropdown_scrollarea.ggScrollByXSmooth(diffX);
				}
			}
			if (me._dropdown_scrollarea.ggVertScrollVisible) {
				if (posY < 0) {
					var diffY = Math.floor(posY * me._dropdown_scrollarea.ggVPercentVisible);
					me._dropdown_scrollarea.ggScrollByYSmooth(diffY);
				} else if (posY + height > me._dropdown_scrollarea.offsetHeight - (me._dropdown_scrollarea.ggHorScrollVisible ? 15 : 0)) {
					var diffY = Math.ceil(((posY + height) - (me._dropdown_scrollarea.offsetHeight - (me._dropdown_scrollarea.ggHorScrollVisible ? 15 : 0))) * me._dropdown_scrollarea.ggVPercentVisible);
					me._dropdown_scrollarea.ggScrollByYSmooth(diffY);
				}
			}
		}
		els.ontouchstart = function(e) {
			e = e || window.event;
			var t = e.touches;
			me._dropdown_scrollarea.ggDragLastX = t[0].clientX;
			me._dropdown_scrollarea.ggDragLastY = t[0].clientY;
			me._dropdown_scrollarea__content.ontouchend = function() {
				let inertiaInterval = setInterval(function() {
					me._dropdown_scrollarea.ggDragInertiaX *= 0.65;
					me._dropdown_scrollarea.ggDragInertiaY *= 0.65;
					me._dropdown_scrollarea.ggScrollByX(-me._dropdown_scrollarea.ggDragInertiaX);
					me._dropdown_scrollarea.ggScrollByY(-me._dropdown_scrollarea.ggDragInertiaY);
					if (Math.abs(me._dropdown_scrollarea.ggDragInertiaX) < 1.0 && Math.abs(me._dropdown_scrollarea.ggDragInertiaY) < 1.0) {
						clearInterval(inertiaInterval);
					}
					}, 50);
				me._dropdown_scrollarea__content.ontouchend = null;
				me._dropdown_scrollarea__content.ontouchmove = null;
			}
			me._dropdown_scrollarea__content.ontouchmove = function(e) {
				e = e || window.event;
				e.preventDefault();
				var t = e.touches;
				var diffX = t[0].clientX - me._dropdown_scrollarea.ggDragLastX;
				var diffY = t[0].clientY - me._dropdown_scrollarea.ggDragLastY;
				me._dropdown_scrollarea.ggDragInertiaX = diffX;
				me._dropdown_scrollarea.ggDragInertiaY = diffY;
				me._dropdown_scrollarea.ggDragLastX = t[0].clientX;
				me._dropdown_scrollarea.ggDragLastY = t[0].clientY;
				me._dropdown_scrollarea.ggScrollByX(-diffX);
				me._dropdown_scrollarea.ggScrollByY(-diffY);
			}
		}
		elVertScrollBg = me._dropdown_scrollarea__vertScrollBg = document.createElement('div');
		el.appendChild(elVertScrollBg);
		elVertScrollBg.setAttribute('style', 'position: absolute; right: 0px; top: 0px; visibility: hidden; width: 15px; height: 73px; background-color: rgba(128,128,128,0); pointer-events: auto;');
		elVertScrollBg.className='ggskin ggskin_scrollarea_vscrollbg';
		elVertScrollFg = me._dropdown_scrollarea__vertScrollFg = document.createElement('div');
		elVertScrollBg.appendChild(elVertScrollFg);
		elVertScrollFg.setAttribute('style', 'position: absolute; left: 0px; top: 0px; visibility: hidden; width: 15px; height: 73px; background-color: rgba(255,255,255,1); pointer-events: auto;');
		elVertScrollFg.className='ggskin ggskin_scrollarea_vscrollfg';
		me._dropdown_scrollarea.ggScrollPosY = 0;
		me._dropdown_scrollarea.ggScrollPosYPercent = 0.0;
		elVertScrollFg.onmousedown = function(e) {
			e = e || window.event;
			e.preventDefault();
			e.stopPropagation();
			me._dropdown_scrollarea.ggDragLastY = e.clientY;
			document.onmouseup = function() {
				let inertiaInterval = setInterval(function() {
					me._dropdown_scrollarea.ggDragInertiaY *= 0.65;
					me._dropdown_scrollarea.ggScrollByY(me._dropdown_scrollarea.ggDragInertiaY);
					if (Math.abs(me._dropdown_scrollarea.ggDragInertiaY) < 1.0) {
						clearInterval(inertiaInterval);
					}
					}, 50);
				document.onmouseup = null;
				document.onmousemove = null;
			}
			document.onmousemove = function(e) {
				e = e || window.event;
				e.preventDefault();
				var diffY = e.clientY - me._dropdown_scrollarea.ggDragLastY;
				me._dropdown_scrollarea.ggDragInertiaY = diffY;
				me._dropdown_scrollarea.ggDragLastY = e.clientY;
				me._dropdown_scrollarea.ggScrollByY(diffY);
			}
		}
		elVertScrollFg.ontouchstart = function(e) {
			e = e || window.event;
			e.preventDefault();
			e.stopPropagation();
			var t = e.touches;
			me._dropdown_scrollarea.ggDragLastY = t[0].clientY;
			document.ontouchend = function() {
				let inertiaInterval = setInterval(function() {
					me._dropdown_scrollarea.ggDragInertiaY *= 0.65;
					me._dropdown_scrollarea.ggScrollByY(me._dropdown_scrollarea.ggDragInertiaY);
					if (Math.abs(me._dropdown_scrollarea.ggDragInertiaY) < 1.0) {
						clearInterval(inertiaInterval);
					}
					}, 50);
				document.ontouchend = null;
				document.ontouchmove = null;
			}
			document.ontouchmove = function(e) {
				e = e || window.event;
				e.preventDefault();
				var t = e.touches;
				var diffY = t[0].clientY - me._dropdown_scrollarea.ggDragLastY;
				me._dropdown_scrollarea.ggDragInertiaY = diffY;
				me._dropdown_scrollarea.ggDragLastY = t[0].clientY;
				me._dropdown_scrollarea.ggScrollByY(diffY);
			}
		}
		elVertScrollBg.onmousedown = function(e) {
			e = e || window.event;
			e.preventDefault();
			var diffY = me._dropdown_scrollarea.ggScrollHeight;
			if (e.offsetY < me._dropdown_scrollarea.ggScrollPosY) {
				diffY = diffY * -1;
			}
			me._dropdown_scrollarea.ggScrollByYSmooth(diffY);
		}
		elVertScrollBg.ontouchstart = function(e) {
			e = e || window.event;
			e.preventDefault();
			e.stopPropagation();
			var t = e.touches;
			var rect = me._dropdown_scrollarea__vertScrollBg.getBoundingClientRect();
			var diffY = me._dropdown_scrollarea.ggScrollHeight;
			if ((t[0].clientY - rect.top) < me._dropdown_scrollarea.ggScrollPosY) {
				diffY = diffY * -1;
			}
			me._dropdown_scrollarea.ggScrollByYSmooth(diffY);
		}
		el.addEventListener('wheel', function(e) {
			e.preventDefault();
			var wheelDelta = Math.sign(e.deltaY);
			me._dropdown_scrollarea.ggScrollByYSmooth(20 * wheelDelta);
		});
		elCornerBg = me._dropdown_scrollarea__cornerBg = document.createElement('div');
		el.appendChild(elCornerBg);
		elCornerBg.setAttribute('style', 'position: absolute; right: 0px; bottom: 0px; visibility: hidden; width: 15px; height: 15px; background-color: rgba(255,255,255,1);');
		elCornerBg.className='ggskin ggskin_scrollarea_scrollcorner';
		el.ggId="Dropdown Scrollarea";
		el.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		el.ggVisible=true;
		el.className="ggskin ggskin_scrollarea ";
		el.ggType='scrollarea';
		hs ='';
		hs+='border : 1px solid rgba(0, 0, 0, 0);';
		hs+='cursor : pointer;';
		hs+='height : 73px;';
		hs+='left : 0px;';
		hs+='overflow : hidden;';
		hs+='position : absolute;';
		hs+='top : 0px;';
		hs+='visibility : inherit;';
		hs+='width : 150px;';
		hs+='pointer-events:auto;';
		hs+='<style> .dropdown { position: relative; display: inline-block; } .dropdown-content { display: none; position: absolute; background-color: #f9f9f9; min-width: 160px; box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2); padding: 12px 16px; z-index: 1; } .dropdown:hover .dropdown-content { display: block; } <\/style> <div class=\"dropdown\"> <span>Mouse over me<\/span> <div class=\"dropdown-content\"> <p>Hello World!<\/p> <\/div> <\/div>';
		el.setAttribute('style',hs);
		el.style[domTransform + 'Origin']='50% 50%';
		me._dropdown_scrollarea.ggIsActive=function() {
			if ((this.parentNode) && (this.parentNode.ggIsActive)) {
				return this.parentNode.ggIsActive();
			}
			return false;
		}
		el.ggElementNodeId=function() {
			if ((this.parentNode) && (this.parentNode.ggElementNodeId)) {
				return this.parentNode.ggElementNodeId();
			}
			return player.getCurrentNode();
		}
		me._dropdown_scrollarea.ggUpdatePosition=function (useTransition) {
			{
				var horScrollWasVisible = this.ggHorScrollVisible;
				var vertScrollWasVisible = this.ggVertScrollVisible;
				this.ggContent.style.left = '0px';
				this.ggContent.style.top = '0px';
				this.ggContentLeftOffset = 0;
				this.ggContentTopOffset = 0;
				var offsetWidthWithScale = this.getBoundingClientRect().width;
				var offsetHeightWithScale = this.getBoundingClientRect().height;
				var domRectContent = this.ggContent.getBoundingClientRect();
				var minX = 0;
				var minY = 0;
				var maxX = 0;
				var maxY = 0;
				var stack=[];
				stack.push(this.ggContent);
				while(stack.length>0) {
					var e=stack.pop();
					if (e!=this.ggContent && e.getBoundingClientRect && e.style['display']!='none') {
						var domRectChild = e.getBoundingClientRect();
						var diffX = domRectChild.left - domRectContent.left;
						minX = Math.min(minX, diffX);
						maxX = Math.max(maxX, diffX + domRectChild.width);
						var diffY = domRectChild.top - domRectContent.top;
						minY = Math.min(minY, diffY);
						maxY = Math.max(maxY, diffY + domRectChild.height);
					}
					if (e.hasChildNodes() && e.style['display']!='none') {
						for(var i=0;i<e.childNodes.length;i++) {
							stack.push(e.childNodes[i]);
						}
					}
				}
				if (minX < 0) this.ggContentLeftOffset = -minX;
				if (minY < 0) this.ggContentTopOffset = -minY;
				var contentWidth = maxX - minX;
				var contentHeight = maxY - minY;
				this.ggContent.style.left = this.ggContentLeftOffset + 'px';
				this.ggContent.style.top = this.ggContentTopOffset + 'px';
				this.ggContent.style.width = contentWidth + 'px';
				this.ggContent.style.height = contentHeight + 'px';
				this.ggContent.style.left = this.ggContentLeftOffset + 'px';
				this.ggContent.style.marginLeft = '0px';
				this.ggContent.style.top = -(Math.round(me._dropdown_scrollarea.ggScrollPosY / me._dropdown_scrollarea.ggVPercentVisible)) + this.ggContentTopOffset + 'px';
				this.ggContent.style.marginTop = '0px';
				if ((me._dropdown_scrollarea.ggHorScrollVisible && contentHeight > this.offsetHeight - 15) || (!me._dropdown_scrollarea.ggHorScrollVisible && contentHeight > this.offsetHeight)) {
					me._dropdown_scrollarea__vertScrollBg.style.visibility = 'inherit';
					me._dropdown_scrollarea__vertScrollFg.style.visibility = 'inherit';
					me._dropdown_scrollarea.ggVertScrollVisible = true;
				} else {
					me._dropdown_scrollarea__vertScrollBg.style.visibility = 'hidden';
					me._dropdown_scrollarea__vertScrollFg.style.visibility = 'hidden';
					me._dropdown_scrollarea.ggVertScrollVisible = false;
				}
				if(me._dropdown_scrollarea.ggVertScrollVisible) {
					me._dropdown_scrollarea.ggAvailableWidth = me._dropdown_scrollarea.offsetWidth - 15;
					if (me._dropdown_scrollarea.ggHorScrollVisible) {
						me._dropdown_scrollarea.ggAvailableHeight = me._dropdown_scrollarea.offsetHeight - 15;
						me._dropdown_scrollarea.ggAvailableHeightWithScale = me._dropdown_scrollarea.getBoundingClientRect().height - me._dropdown_scrollarea__vertScrollBg.getBoundingClientRect().width;
						me._dropdown_scrollarea__cornerBg.style.visibility = 'inherit';
					} else {
						me._dropdown_scrollarea.ggAvailableHeight = me._dropdown_scrollarea.offsetHeight;
						me._dropdown_scrollarea.ggAvailableHeightWithScale = me._dropdown_scrollarea.getBoundingClientRect().height;
						me._dropdown_scrollarea__cornerBg.style.visibility = 'hidden';
					}
					me._dropdown_scrollarea__vertScrollBg.style.height = me._dropdown_scrollarea.ggAvailableHeight + 'px';
					me._dropdown_scrollarea.ggVPercentVisible = contentHeight != 0 ? me._dropdown_scrollarea.ggAvailableHeightWithScale / contentHeight : 0.0;
					if (me._dropdown_scrollarea.ggVPercentVisible > 1.0) me._dropdown_scrollarea.ggVPercentVisible = 1.0;
					me._dropdown_scrollarea.ggScrollHeight =  Math.round(me._dropdown_scrollarea__vertScrollBg.offsetHeight * me._dropdown_scrollarea.ggVPercentVisible);
					me._dropdown_scrollarea__vertScrollFg.style.height = me._dropdown_scrollarea.ggScrollHeight + 'px';
					me._dropdown_scrollarea.ggScrollPosY = me._dropdown_scrollarea.ggScrollPosYPercent * me._dropdown_scrollarea.ggAvailableHeight;
					me._dropdown_scrollarea.ggScrollPosY = Math.min(me._dropdown_scrollarea.ggScrollPosY, me._dropdown_scrollarea__vertScrollBg.offsetHeight - me._dropdown_scrollarea__vertScrollFg.offsetHeight);
					me._dropdown_scrollarea__vertScrollFg.style.top = me._dropdown_scrollarea.ggScrollPosY + 'px';
					if (me._dropdown_scrollarea.ggVPercentVisible < 1.0) {
						me._dropdown_scrollarea__content.style.top = -(Math.round(me._dropdown_scrollarea.ggScrollPosY / me._dropdown_scrollarea.ggVPercentVisible)) + this.ggContentTopOffset + 'px';
					}
				} else {
					me._dropdown_scrollarea.ggAvailableWidth = me._dropdown_scrollarea.offsetWidth;
					me._dropdown_scrollarea.ggScrollPosY = 0;
					me._dropdown_scrollarea.ggScrollPosYPercent = 0.0;
					me._dropdown_scrollarea__content.style.top = this.ggContentTopOffset + 'px';
					me._dropdown_scrollarea__cornerBg.style.visibility = 'hidden';
				}
				if(horScrollWasVisible != me._dropdown_scrollarea.ggHorScrollVisible || vertScrollWasVisible != me._dropdown_scrollarea.ggVertScrollVisible) {
					me.updateSize(me._dropdown_scrollarea);
					me._dropdown_scrollarea.ggUpdatePosition();
				}
			}
		}
		el=me._dropdown_cloner=document.createElement('div');
		el.ggNumRepeat = 1;
		el.ggNumRows = 0;
		el.ggNumCols = 0;
		el.ggWidth = 169;
		el.ggHeight = 24;
		el.ggUpdating = false;
		el.ggFilter = [];
		el.ggInstances = [];
		me._dropdown_cloner.callChildLogicBlocks_mouseover = function(){
			if(me._dropdown_cloner.ggInstances) {
				var i;
				for(i = 0; i < me._dropdown_cloner.ggInstances.length; i++) {
					if (me._dropdown_cloner.ggInstances[i]._dropdown_menu_text && me._dropdown_cloner.ggInstances[i]._dropdown_menu_text.logicBlock_backgroundcolor) {
						me._dropdown_cloner.ggInstances[i]._dropdown_menu_text.logicBlock_backgroundcolor();
					}
				}
			}
		}
		me._dropdown_cloner.callChildLogicBlocks_active = function(){
			if(me._dropdown_cloner.ggInstances) {
				var i;
				for(i = 0; i < me._dropdown_cloner.ggInstances.length; i++) {
					if (me._dropdown_cloner.ggInstances[i]._dropdown_menu_text && me._dropdown_cloner.ggInstances[i]._dropdown_menu_text.logicBlock_backgroundcolor) {
						me._dropdown_cloner.ggInstances[i]._dropdown_menu_text.logicBlock_backgroundcolor();
					}
					if (me._dropdown_cloner.ggInstances[i]._dropdown_checkmark && me._dropdown_cloner.ggInstances[i]._dropdown_checkmark.logicBlock_alpha) {
						me._dropdown_cloner.ggInstances[i]._dropdown_checkmark.logicBlock_alpha();
					}
				}
			}
		}
		me._dropdown_cloner.callChildLogicBlocks_changevisitednodes = function(){
			if(me._dropdown_cloner.ggInstances) {
				var i;
				for(i = 0; i < me._dropdown_cloner.ggInstances.length; i++) {
					if (me._dropdown_cloner.ggInstances[i]._dropdown_checkmark && me._dropdown_cloner.ggInstances[i]._dropdown_checkmark.logicBlock_alpha) {
						me._dropdown_cloner.ggInstances[i]._dropdown_checkmark.logicBlock_alpha();
					}
				}
			}
		}
		el.ggUpdate = function(filter) {
			if(me._dropdown_cloner.ggUpdating == true) return;
			me._dropdown_cloner.ggUpdating = true;
			var el=me._dropdown_cloner;
			var curNumCols = 0;
			curNumCols = me._dropdown_cloner.ggNumRepeat;
			if (curNumCols < 1) curNumCols = 1;
			if (typeof filter=='object') {
				el.ggFilter = filter;
			} else {
				filter = el.ggFilter;
			};
			if (me.ggTag) filter.push(me.ggTag);
			filter=filter.sort();
			if ((el.ggNumCols == curNumCols) && (el.ggInstances.length > 0) && (filter.length === el.ggCurrentFilter.length) && (filter.every(function(value, index) { return value === el.ggCurrentFilter[index] }) )) {
				me._dropdown_cloner.ggUpdating = false;
				return;
			} else {
				el.ggNumRows = 1;
				el.ggNumCols = curNumCols;
			}
			el.ggCurrentFilter = filter;
			el.ggInstances = [];
			if (el.hasChildNodes() == true) {
				while (el.firstChild) {
					el.removeChild(el.firstChild);
				}
			}
			var tourNodes = player.getNodeIds();
			var row = 0;
			var column = 0;
			var currentIndex = 0;
			for (var i=0; i < tourNodes.length; i++) {
				var nodeId = tourNodes[i];
				var passed = true;
				var nodeData = player.getNodeUserdata(nodeId);
				if (filter.length > 0) {
					for (var j=0; j < filter.length; j++) {
						if (nodeData['tags'].indexOf(filter[j]) == -1) passed = false;
					}
				}
				if (passed) {
				var parameter={};
				parameter.top=(row * me._dropdown_cloner.ggHeight) + 'px';
				parameter.left=(column * me._dropdown_cloner.ggWidth) + 'px';
				parameter.index=currentIndex;
				parameter.title=nodeData['title'];
				var inst = new SkinCloner_dropdown_cloner_Class(nodeId, me, el, parameter);
				currentIndex++;
				el.ggInstances.push(inst);
				el.appendChild(inst.__div);
				inst.__div.ggObj=inst;
				skin.updateSize(inst.__div);
				column++;
				if (column >= el.ggNumCols) {
					column = 0;
					row++;
					el.ggNumRows++;
				}
				}
			}
			me._dropdown_cloner.callChildLogicBlocks_mouseover();
			me._dropdown_cloner.callChildLogicBlocks_active();
			me._dropdown_cloner.callChildLogicBlocks_changevisitednodes();
			me._dropdown_cloner.ggUpdating = false;
			player.triggerEvent('clonerchanged');
			if (me._dropdown_cloner.parentNode.classList.contains('ggskin_subelement') && me._dropdown_cloner.parentNode.parentNode.classList.contains('ggskin_scrollarea')) me._dropdown_cloner.parentNode.parentNode.ggUpdatePosition();
		}
		el.ggFilter = [];
		el.ggId="Dropdown Cloner";
		el.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		el.ggVisible=true;
		el.className="ggskin ggskin_cloner ";
		el.ggType='cloner';
		hs ='';
		hs+='height : 24px;';
		hs+='left : 0px;';
		hs+='overflow : visible;';
		hs+='position : absolute;';
		hs+='top : 0px;';
		hs+='visibility : inherit;';
		hs+='width : 169px;';
		hs+='pointer-events:none;';
		el.setAttribute('style',hs);
		el.style[domTransform + 'Origin']='50% 50%';
		me._dropdown_cloner.ggIsActive=function() {
			if ((this.parentNode) && (this.parentNode.ggIsActive)) {
				return this.parentNode.ggIsActive();
			}
			return false;
		}
		el.ggElementNodeId=function() {
			if ((this.parentNode) && (this.parentNode.ggElementNodeId)) {
				return this.parentNode.ggElementNodeId();
			}
			return player.getCurrentNode();
		}
		me._dropdown_cloner.ggUpdateConditionNodeChange=function () {
			var cnode=player.getCurrentNode();
			for(var i=0; i<me._dropdown_cloner.childNodes.length; i++) {
				var child=me._dropdown_cloner.childNodes[i];
				if (child.ggObj && child.ggObj.ggNodeId==cnode) {
			        var childOffX = child.offsetLeft;
			        var childOffY = child.offsetTop;
					var p = child.parentElement;
			        while (p != null && p!==this.divSkin) {
						if (p.ggType && p.ggType == 'scrollarea') {
							p.ggScrollIntoView(childOffX, childOffY, child.clientWidth, child.clientHeight);
						}
						childOffX += p.offsetLeft;
						childOffY += p.offsetTop;
						p = p.parentElement;
					}
				}
			}
		}
		me._dropdown_cloner.ggUpdatePosition=function (useTransition) {
				me._dropdown_cloner.ggUpdate();
		}
		me._dropdown_cloner.ggNodeChange=function () {
			me._dropdown_cloner.ggUpdateConditionNodeChange();
		}
		me._dropdown_scrollarea__content.appendChild(me._dropdown_cloner);
		me._dropdown_background.appendChild(me._dropdown_scrollarea);
		me._drop_live.appendChild(me._dropdown_background);
		el=me._dropdown_menu_title_background=document.createElement('div');
		el.ggId="Dropdown Menu Title Background";
		el.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		el.ggVisible=true;
		el.className="ggskin ggskin_rectangle ";
		el.ggType='rectangle';
		hs ='';
		hs+=cssPrefix + 'border-radius : 1px;';
		hs+='border-radius : 1px;';
		hs+='border : 1px solid #ffffff;';
		hs+='cursor : pointer;';
		hs+='height : 30px;';
		hs+='left : 0px;';
		hs+='position : absolute;';
		hs+='top : 0px;';
		hs+='visibility : inherit;';
		hs+='width : 150px;';
		hs+='pointer-events:auto;';
		el.setAttribute('style',hs);
		el.style[domTransform + 'Origin']='50% 50%';
		me._dropdown_menu_title_background.ggIsActive=function() {
			if ((this.parentNode) && (this.parentNode.ggIsActive)) {
				return this.parentNode.ggIsActive();
			}
			return false;
		}
		el.ggElementNodeId=function() {
			if ((this.parentNode) && (this.parentNode.ggElementNodeId)) {
				return this.parentNode.ggElementNodeId();
			}
			return player.getCurrentNode();
		}
		me._dropdown_menu_title_background.onclick=function (e) {
			me._dropdown_background.ggVisible = !me._dropdown_background.ggVisible;
			var flag=me._dropdown_background.ggVisible;
			me._dropdown_background.style[domTransition]='none';
			me._dropdown_background.style.visibility=((flag)&&(Number(me._dropdown_background.style.opacity)>0||!me._dropdown_background.style.opacity))?'inherit':'hidden';
		}
		me._dropdown_menu_title_background.ggUpdatePosition=function (useTransition) {
		}
		el=me._dropdown_menu_title=document.createElement('div');
		els=me._dropdown_menu_title__text=document.createElement('div');
		el.className='ggskin ggskin_textdiv';
		el.ggTextDiv=els;
		el.ggId="Dropdown Menu Title";
		el.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		el.ggVisible=true;
		el.className="ggskin ggskin_text ";
		el.ggType='text';
		hs ='';
		hs+='height : 30px;';
		hs+='left : -2px;';
		hs+='position : absolute;';
		hs+='top : 5px;';
		hs+='visibility : inherit;';
		hs+='width : 150px;';
		hs+='pointer-events:none;';
		hs+='font-weight: bold;';
		el.setAttribute('style',hs);
		el.style[domTransform + 'Origin']='50% 50%';
		hs ='position:absolute;';
		hs += 'box-sizing: border-box;';
		hs+='cursor: default;';
		hs+='left: 0px;';
		hs+='top:  0px;';
		hs+='width: auto;';
		hs+='height: auto;';
		hs+='pointer-events: none;';
		hs+='border: 0px solid #000000;';
		hs+='border-radius: 5px;';
		hs+=cssPrefix + 'border-radius: 5px;';
		hs+='color: rgba(255,255,255,1);';
		hs+='font-size: 12px;';
		hs+='font-weight: bold;';
		hs+='text-align: center;';
		hs+='white-space: nowrap;';
		hs+='padding: 1px 2px 1px 2px;';
		hs+='overflow: hidden;';
		els.setAttribute('style',hs);
		me._dropdown_menu_title.ggUpdateText=function() {
			var hs=me.ggUserdata.title+"LIVE";
			if (hs!=this.ggText) {
				this.ggText=hs;
				this.ggTextDiv.innerHTML=hs;
				if (this.ggUpdatePosition) this.ggUpdatePosition();
			}
		}
		me._dropdown_menu_title.ggUpdateText();
		player.addListener('changenode', function() {
			me._dropdown_menu_title.ggUpdateText();
		});
		el.appendChild(els);
		me._dropdown_menu_title.ggIsActive=function() {
			if ((this.parentNode) && (this.parentNode.ggIsActive)) {
				return this.parentNode.ggIsActive();
			}
			return false;
		}
		el.ggElementNodeId=function() {
			if ((this.parentNode) && (this.parentNode.ggElementNodeId)) {
				return this.parentNode.ggElementNodeId();
			}
			return player.getCurrentNode();
		}
		me._dropdown_menu_title.ggUpdatePosition=function (useTransition) {
			this.style[domTransition]='left 0';
			this.ggTextDiv.style.left=((148-this.ggTextDiv.offsetWidth)/2) + 'px';
		}
		me._dropdown_menu_title_background.appendChild(me._dropdown_menu_title);
		me._drop_live.appendChild(me._dropdown_menu_title_background);
		me.divSkin.appendChild(me._drop_live);
		el=me._text_1=document.createElement('div');
		els=me._text_1__text=document.createElement('div');
		el.className='ggskin ggskin_textdiv';
		el.ggTextDiv=els;
		el.ggId="Text 1";
		el.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		el.ggVisible=true;
		el.className="ggskin ggskin_text ";
		el.ggType='text';
		hs ='';
		hs+='bottom : 43px;';
		hs+='height : 22px;';
		hs+='left : 34px;';
		hs+='position : absolute;';
		hs+='visibility : inherit;';
		hs+='width : 309px;';
		hs+='pointer-events:auto;';
		el.setAttribute('style',hs);
		el.style[domTransform + 'Origin']='50% 50%';
		hs ='position:absolute;';
		hs += 'box-sizing: border-box;';
		hs+='cursor: default;';
		hs+='left: 0px;';
		hs+='bottom:  0px;';
		hs+='width: auto;';
		hs+='height: auto;';
		hs+='border: 0px solid #000000;';
		hs+='color: rgba(255,255,255,1);';
		hs+='font-size: 17px;';
		hs+='font-weight: inherit;';
		hs+='text-align: left;';
		hs+='white-space: nowrap;';
		hs+='padding: 0px 1px 0px 1px;';
		hs+='overflow: hidden;';
		hs+='overflow-y: auto;';
		els.setAttribute('style',hs);
		els.innerHTML="Heriot Watt University Malaysia Campus";
		el.appendChild(els);
		me._text_1.ggIsActive=function() {
			return false;
		}
		el.ggElementNodeId=function() {
			return player.getCurrentNode();
		}
		me._text_1.ggUpdatePosition=function (useTransition) {
		}
		me.divSkin.appendChild(me._text_1);
		el=me._button_4=document.createElement('div');
		els=me._button_4__img=document.createElement('img');
		els.className='ggskin ggskin_button_4';
		hs='data:image/png;base64,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'+
			'AElFTkSuQmCC';
		els.setAttribute('src',hs);
		els.ggNormalSrc=hs;
		els.setAttribute('style','position: absolute;top: 0px;left: 0px;width: 100%;height: 100%;-webkit-user-drag:none;pointer-events:none;;');
		els.className='ggskin ggskin_button';
		els['ondragstart']=function() { return false; };
		player.checkLoaded.push(els);
		el.appendChild(els);
		el.ggSubElement = els;
		hs='data:image/png;base64,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';
		me._button_4__img.ggOverSrc=hs;
		el.ggId="Button 4";
		el.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		el.ggVisible=true;
		el.className="ggskin ggskin_button ";
		el.ggType='button';
		hs ='';
		hs+='bottom : 30px;';
		hs+='cursor : pointer;';
		hs+='height : 40px;';
		hs+='position : absolute;';
		hs+='right : 50px;';
		hs+='visibility : inherit;';
		hs+='width : 40px;';
		hs+='pointer-events:auto;';
		el.setAttribute('style',hs);
		el.style[domTransform + 'Origin']='50% 50%';
		me._button_4.ggIsActive=function() {
			return false;
		}
		el.ggElementNodeId=function() {
			return player.getCurrentNode();
		}
		me._button_4.onclick=function (e) {
			player.openUrl("https:\/\/www.facebook.com\/hwumalaysia\/","");
		}
		me._button_4.onmouseover=function (e) {
			me._button_4__img.src=me._button_4__img.ggOverSrc;
		}
		me._button_4.onmouseout=function (e) {
			me._button_4__img.src=me._button_4__img.ggNormalSrc;
		}
		me._button_4.ggUpdatePosition=function (useTransition) {
		}
		me.divSkin.appendChild(me._button_4);
		el=me._button_5=document.createElement('div');
		els=me._button_5__img=document.createElement('img');
		els.className='ggskin ggskin_button_5';
		hs='data:image/png;base64,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';
		els.setAttribute('src',hs);
		els.ggNormalSrc=hs;
		els.setAttribute('style','position: absolute;top: 0px;left: 0px;width: 100%;height: 100%;-webkit-user-drag:none;pointer-events:none;;');
		els.className='ggskin ggskin_button';
		els['ondragstart']=function() { return false; };
		player.checkLoaded.push(els);
		el.appendChild(els);
		el.ggSubElement = els;
		el.ggId="Button 5";
		el.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		el.ggVisible=true;
		el.className="ggskin ggskin_button ";
		el.ggType='button';
		hs ='';
		hs+='bottom : 30px;';
		hs+='cursor : pointer;';
		hs+='height : 40px;';
		hs+='position : absolute;';
		hs+='right : 90px;';
		hs+='visibility : inherit;';
		hs+='width : 40px;';
		hs+='pointer-events:auto;';
		el.setAttribute('style',hs);
		el.style[domTransform + 'Origin']='50% 50%';
		me._button_5.ggIsActive=function() {
			return false;
		}
		el.ggElementNodeId=function() {
			return player.getCurrentNode();
		}
		me._button_5.ggUpdatePosition=function (useTransition) {
		}
		me.divSkin.appendChild(me._button_5);
		el=me._button_mute=document.createElement('div');
		el.ggId="button_mute";
		el.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		el.ggVisible=true;
		el.className="ggskin ggskin_container ";
		el.ggType='container';
		hs ='';
		hs+='bottom : 30px;';
		hs+='height : 35px;';
		hs+='position : absolute;';
		hs+='right : 130px;';
		hs+='visibility : inherit;';
		hs+='width : 35px;';
		hs+='pointer-events:none;';
		el.setAttribute('style',hs);
		el.style[domTransform + 'Origin']='50% 50%';
		me._button_mute.ggIsActive=function() {
			return false;
		}
		el.ggElementNodeId=function() {
			return player.getCurrentNode();
		}
		me._button_mute.ggUpdatePosition=function (useTransition) {
		}
		el=me._unmute=document.createElement('div');
		els=me._unmute__img=document.createElement('img');
		els.className='ggskin ggskin_unmute';
		hs='data:image/png;base64,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';
		els.setAttribute('src',hs);
		els.ggNormalSrc=hs;
		els.setAttribute('style','position: absolute;top: 0px;left: 0px;width: 100%;height: 100%;-webkit-user-drag:none;pointer-events:none;;');
		els.className='ggskin ggskin_button';
		els['ondragstart']=function() { return false; };
		player.checkLoaded.push(els);
		el.appendChild(els);
		el.ggSubElement = els;
		hs='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAZAAAAGQCAYAAACAvzbMAAAZT0lEQVR4nO3d3XUcN7aG4Q+zfG9l4D4RmIrAzQhERTDNCCRFQDECShGQE4GoCNiKQHQELEdATgT7XBRotTUSWajaKKBQ77OWLs6cFohmy/U1sPEjAQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAFilULoDNTKzF5KOJG3in1/j/w1gHW4l/VdSF//chhAeSnaoRgSIJDM7krSV9Ie+BQcAHOrUB8sXSfsQwm3Z7pS32gAxsxNJr9QHx6ZoZwAsUSdpL+lzCOG6bFfKWFWAmNlG0htJO0kvinYGQEseJF1J+hhC6Mp2ZT6rCBAz20o6Uz/aAICc9pLOQwj7wv3IrukAITgAFL'+
			'RX40HSZIDEoviFCA4A5e0lvWux6P6v0h3wZGYvzOxC0lcRHgDqsJX01cwu4haBZjQzAonTVZdiRRWAenWSTluZ1lr8CORg1HEjwgNA3TaSbloZjSx6BBKX5X4Su8QBLM+tpNdLXva72ACJU1aflH8/R3fw56/MPwtAeb/p2zFGm8w/60F9iOwz/5wsFhkgZrZTX+/I4VrSn+qPKthn+hkAFiJ+Wd1K+l3SSaYfcxpCuMrUNh6Z2c78XcajTQDgSWZ2Ep8Z3nal31vTzDc87szsrTVQyAIwP+sX8LyNzxIvu9Lvq0nmFx53fEgAPMXn053TM2pX+v00xXzC497M3pZ+LwDaZf2I5N7hebUr/V6aYGZbhw/jkzFVBWAG1k9tfXJ4bm1Lv5dFM7ONTUvzeyPJARRg/czJ1OfXpvT7WCTrU/zrhF/+V+sPVQSAIszsyOE5'+
			'xuxJKuu3+o/FlBWAKtj0Ka2L0u9hUWxa3SPXBkMAGM2m7R3Zlu7/Ilif1neEB4DWTAiRO2NW5Xk2fuqK8ABQvQkhwlTWU6wvOI3xqXTfAWAoG18TYWHQz5jZzYhfKKsUACyKjV9lelO671WycYXzeyORASyQ9TMuY/aJbEv3vTo2bvTBCboAFsvGHdPEKOSQjRt9UPcAsHg2rh6yLd3valj66OPeqHsAaID19ZDUqSxGIdLf512l4lRdAM2w/hTfVJvS/S7O0vd93JXuMwB4s/QN1OwLsfSh2650nwHAm6UX1O9L97ko6+8WTsHoA0CzLH0UUnQl6r9K/nBJrxJf/zFLLwCgDqnPuNRnaDtGpC0rrwA0y/oVWSnWOStj6edecVgigOZZ+mGLxU7jKDmFtU18/eccnQCAyqQ+67Y5OlE1S9x9Wbq/ADCXxBFIsVM5So'+
			'5AUoZd19l6AQD12Se8dl1TWNYXwzcJf+XPTF0BgBp9SXjtxgotMCo1AklNzH2OTgBApfaJry8yCikVIJuUF4cQ9nm6AQD1GfHM22ToxrOWECBdpj4AQM26hNduMvXhSaUC5NeE13a5OgEAFesSXpvyTHWzhBpIl6sTAFCxLuG1q6qBpPirdAcAoIDqn31LCBAAQIUIEADAKAQIAGAUAgQAMAoBAgAYhQABAIzyS+kOAK0xs636q0a/X5v/WdJ1CKGbu09ADgQI4MTMNpIu9fMLfraSLszsPITwfp5eAfkwhQU4iKOOrxp2O9yZmX0tdQQ34IUAASYys7eSbiSlBMKRpIs8PQLmQYAAI5nZCzO71Pgg2JnZiWefgDkRIMAIsd5xI2k3samzyZ0BCiFAgEQH9Q6PE1CPYhgBi0OAAAlG1jues3FsC5gNy3iBAeKKqQtN'+
			'n7ICmkGAAM+IU0yfVOjSHqBWTGEBT3CudwBNIUCAn8hU7wCawRQW8B3qHcAwBAhwgHoHMBxTWEBEvQNIQ4AAot4BjMEUFlaNegcwHgGC1aLeAUzDFBZWiXoHMB0BgtWh3gH4YAoLq0G9A/BFgGAVqHcA/pjCQvOodwB5ECBoGvUOIB+msNAk6h1AfgQImkO9A5gHU1hoCvUOYD4ECJpBvQOYF1NYWDzqHUAZBAgWjXoHUA5TWFgs6h1AWQQIFol6B1AeU1hYFOody2RmR5JOJP1x8D9/kXQbQrgu0ytMRYBgMah3LE/8zC4lbX/w/97G13SSTkMI+5m6BSdMYWERqHcsTxx1fNWPw+PQRtKNme0ydwnOCBBUj3rH8sTwSP3MLgmRZWEKC9Wi3rFolxoX+JdmphDClXN/kAEBgipR71guMzvRtM+NEFkIprBQHeodi/'+
			'fKoQ2msxaAAEFVqHc0wSv4L+OXCVSKAEEVzOyFmV2qr3lg2TxHjp9iQR4VIkBQXKx33IhieSseHNt6oX6JLyPSChEgKIp6R5NundsjRCpFgKAY6h3N8g4Qqf+CcZmhXUxAgGB21Dua9zFTuydm9j5T2xiBAMGsqHe0L4TQSfqQqfmzuM8EFSBAMBvqHatyrjxTWVK/vJd/QxUgQDAL6h3rEkJ4kHSsPCHyQn2I8G+pMAIEWVHvWK/MIXIk6SxDu0hAgCAb6h3IHCJvqYeURYAgC+odeHQQIl2G5i/jFxUUQIDAHfUOfC+GyGv57lKXYj3EuU0MRIDADfUOPCWEcKt+JOJtG7+0YGYECFxQ78AQMUROMzR9xlTW/AgQTEa9AyniRVHnzs0ylVUAAYJJqHdgjBDCe0nXzs1uuYRqXgQIRqHe0RYz25nZJzO7t2/uzCzn'+
			'pU6n8l/ee8EGw/kQIEhGvaMdZnZkZnfqp39O9M+R5Eb9Z3xjZu7HqceVWafyvz+ELzUzIUCQhHpHO+J5Ujfqg+I5W0l33mdQxaL6O882Je24CnceBAgGo97RjoNRZMpn+Xixk3eIXMm/HsIxJzMgQPAs6h1NOtO4LwK5DjI8le9OdQrqMyBA8CTqHe2Jn+luQhNHcr5i9qAe4olRSGYECH6KekezPA4gzBEie/leRLXhBsO8CBD8EPWOpv3m1M6R/Kc1z+U7lfWGZb35ECD4B+odq+A5otyZmdu/lQxTWS8kcU5WJgQI/ka9YzW8N++99SxYx6msK6/2xCgkGwIEkqh3rMxfGdq8cF7e+05+GwwZhWTyS+kOtCp+4zlSvwGrdr+K/8DW5Fr+U5SPy3uP4zTUJCGEBzM7l18/35jZB4++4RsCxFEMjZ2kf4tv8qhUCK'+
			'Ezs738v9wcqT8S5bVHYyGED2b2RsN2yj/ncRTy3qEtRExhOYiF5/eS7tR/YyI8UDvvM6genThv4PMsqP/bsS2IAJnsoHYwdmcvMLsQQqc8FztJfT1k49FQLKjvPdpSvy9k59QWRIBMEv8xDj2MDqhKCOFaeULE+3Inz8un3ji2tXoEyEgxPLgBDYsWDzLMESJu95Q7j0KOOKnXDwEyAuGBlmQMkTPH/RfUQipEgCSKa90JDzQlhojnOVSS41RWrNnsPdpSv3ueeqUDAiQd4YEmhRDeyXcHuNSvyto6teVZC9k5trVaBEiCOHXFEl207J0y3FPu0YhzLYRpLAcESBruF0DT4k7t1/LdI3LkuHz2o1M7R943K64RATKQmZ2I5bpYgUx7RFwK6nHpcTe9O5IYhUxGgAz3qnQHgLnEB7Xr5U7yO2/NaxTicbHWqhEgw21L'+
			'dwCYWa2XO105tCH1O9OZxpqAABluU7oDwJxqvdwp9utqcm96TGNNQIAMwM5VrFWGe8q9Htj/cWqHaawJCBAAzzmX36oslwMNY7B1U9sR01iTECAAnhSnjN45Nul1oOG1UzuMQkYiQAA8Kx514rXB0OtAQ69pLFZYjkSAABjKcxQyuRYSQriVzzTWEWdjjUOAABjE+SgRrwMNvaaxtk7trAoBAiCF54GGHrUHprEKIkAADOY8CplcTHecxto6tLE6BAiAVJ4HGm4c2tk7tLGhDpKOAAGQxPlAQ49prM8ObUiMQpIRIADG8BqFeOxM3zu0IUl/OLWzGgQIgDGunNqZPI0VNzp67FFhR3oiAgRAMucDDbcObewd2tg6tLEqBAiAsbxqDx5LaL84tCHOxUpDgAAYJRbTPQ5Z3Dq04XbMilM7q0CAAJjCYyf4i6nf/OM1vJ'+
			'1DXzYObawGAQJgipqW0HqMQliJlYAAATBanMby8LtDG386tLFxaGM1CBAAU+0d2tg6tOExAtk4tLEaBAiAqTxWQHkcJdI59IOVWAkIEABT7Z3amVpI91qJxZlYAxEgACaJJ/R68Pjmz470GREgADzsHdr4zaENj30pjEAGIkAAeKjlm79HPcZjRdgqECAAPPzl0MbGoQ0PjEAGIkAAeKhlCa1XIR0DECAAPLg8uB1uKKzlbK5VIEAATBaPd/ewmfj3vfqBAQgQAF6KTx857gXBAAQIAC8e3/6r2IPhsCt+FQgQADWp5cFdRZDVjgAB4MXlVkAsBwECoDX70h1YCwIEADAKAQKgJh7nYWEmBAiAmmxKdwDDESAAgFEIEAA16Up3AMMRIABq4nGqL2ZCgAAARiFAALRmW7oDa0GAAPDyR+kOYF4ECICa1HIcO6f6DkCA'+
			'APDicRBiFQ9ux/tNmkaAAPBS/ARbMyvehzUhQABM5nh/Rjfx79dyHPwqECAAPLh88w8hdBOb8AiQvUMbq0CAAPDgESCdQxtMYc2IAAHgweMU3c6hDQ8U0AciQAB48Pjm77ECy2Mvyp8ObawCAQLAw9ahDY9zsDxqIIxABiJAAExiZlunpjxGILWMhFaBAAEw1dapnUkPbsc9IIxABiJAAEzlUXfoHHZ/bxz6oRACI5CBCBAAU20d2qhl+qpzaGM1CBAAo5nZiVNTXxza+N2hjc6hjdUgQABM8cqpnb1DGx4jEI8gWw0CBMAUHiOQh6l1BzPbyKcG0jm0sRoECIBR4vRVLWdPea3AooCegAABMJbX9NVnhzZcbkNkBVYaAgRAsnh8+86pub1DG1uHNvYObawKAQJgjJ1TO7dTj3CPYcYO9AIIEABjvHFq5z8ObWwd2p'+
			'BYgZWMAAGQJBbPN07NXTu0UdNS4lUhQACk8hp9TJ6+irYObXgcpbI6BAiAweLJu1un5j5ObSAeoLiZ3hVGH2MQIABSnDm25TF99W+HNiSfpcSrQ4AAGMR59HHlNGXkdRbX3qmdVSFAAAx14djW5NVXjtNXt9Q/xiFAADzLzHZyPC4khLB3aIfpq8IIEABPihv1PEcfk4vnkdf0lUctZpUIEADPOZPPoYlSv1z2amojsR6zmdqO+v6wA30kAmQAp+E2sDjxQf3WsUmPneeS3/QVo48JCJDhutIdAOYUp64uHZt8kPRhaiPOBzl6BdoqESDD7Ut3AJjZmfyOLJGkj06rnXYObUhMX01GgAzHSg2sRjzvynPqqpPD6CPyOkqF6auJCJCBQgjXYhoLKxCvh/WcupKkc4/Rh/NBjkxfTUSApDkv3QEgp1hf+CS/VVdSv+/j'+
			'yqktz4Mcmb6aiABJEP8j4B8dWnYhvw2Dj955NOJ8lAqjDwcESLrT0h0AcjCz9/IrUD+6dlwG73mQ45VjW6tFgCSKw15CBE2JR5V4PqClftmuy38rsS6z9WhLfgc5rh4BMkKcyqIegibE8PAumktOhfPIs39MXzkhQEYKIbwXIxEsXMbw2IcQXJbtOtc+vA5yhAiQSeJI5Fgs78UCxSWxOcLDbeoq8pxa8zrIESJAJovfZl6qn9JiXhWLkGmvx6N3Tnede48+XA5yxDcEiIMQwkOc0vo/9UsWWeqL2l3Kd6/HoyvnhzS1j4r9UroDLYkFww+SPsRveEfyX1Ofw6/yPbYCFXNe0XToVk57PiTJzN7Kb9e5y0GO+CcCJJM4hO+0kPN2zOyL8n0rRV28LmI69CDp1GvVVdwR71r7YOmuP6awIOnvs76OxfTbGvyWoc13zk'+
			'eDXMjvywyjj0wIEPwtPgCOtZBRE0bznlY996x7xML5zqs9MfrIhgDBP8QFAa/FRsmWfXFs6youIHFR6yVW+DECBD8UHwqvxdLkFnl9pq5F86jWS6zwAwQIfoq6SLM8pihvJR17Ppwz3L/eidFHVgQInkRdpD1xheDVhCZyhIf31JXkexYXfoAAwbOoizRp7MkJnZzDI7qU79TVnl3n+REgGIy6SDviKORYaZ/lraTX3uERD3T03pvCl50ZECBIQl2kHQfTk0M+y736kYfr525mR+r3fHi64sTdeRAgSEZdpB0hhNsQwkv1p+de658jkk59reQ4hOA+bXVQ9/A8/eBB/ivD8BMcZYJR4sPkdbwG1fsmO8ws1guuZv6xl8pw/zqF8/kwAsEk1EUwRvzi4V33oHA+MwIEk1EXQYra71/HcAQIXFAXwRCxaJ7r/vUuQ7t4'+
			'AgECN+wXwVNieNxkaNrt/nWkIUDgjroIvhdXXN3I/74Zpq4KIkCQBXURPMoYHlJ/iVWXoV0MQIAgG+oiOAiPHFc7f4hfVFAIAYKsqIusV+bwuBX/poojQDAL6iLrkjk8HpThTC6kI0AwG+oiq3KmPOEhUfeoBgGCWVEXaZ+ZbeR7MdShc+oe9SBAMDvqIs17k6nda8/71zEdAYJiqIs0K1fRnP0elSFAUBR1kSZ5B8iD8tyCiIkIEBRHXaQ53vd7EB6VIkBQBeoiTfEcTbrfggg/BAiqQl2kCV4P/FPCo24ECKpDXWTxPju0ccrlUPUjQFAl6iLLFb8ATAl/wmMhCBBUi7rIop1q3DQk4bEgBAiqR11keQ5GkCmfGeGxMAQIFoG6yPLEEHkpaf/MSzv1q62uMncJzn4p3QFgqBDCrZkdq79T+6R0f/C8eOjhcbzO9k'+
			'TS7/q2T+SL+uto92V6h6kIECxK3FD22szeqz/xFQsQRyOMHhvDFBYWiboIUB4BgsWiLgKURYBg0dgvApRDgGDx2C8ClEGAoBnURYB5ESBoCnURYD4ECJpDXQSYBwGCJlEXAfIjQNA06iJAPgQImkddBMiDAMEqUBcB/BEgWA3qIoAvAgSrQ10E8EGAYJWoiwDTESBYLeoiwDQECFaNuggwHgECiLoIMAYBAkTURYA0BAhwgLoIMBwBAnyHuggwDAEC/AR1EeBpBAjwBOoiwM8RIMAzqIsAP0aAAANQFwH+FwECJMhUF+kc2wJmQ4AAiZzrIrchhM6hHWB2BAgwgmNdhCkxLBYBAozkUBe5jqMZYJEIEGCikXWRW0mnWToEzIQAARzEkcRLSfsBLz8PIbwMIbBBEYv2S+kOAK2IxfBjM9tKeiXp6LuXfFY/bdXN2zMg'+
			'DwIEcBZC2GvYSARYNKawAACjECAAgFEIEADAKAQIAGAUAgQAMAoBAgAYZQkB8lvpDgBAAdU/+0oFSMoppptcnQCAim0SXlvkxsxSAfLfhNducnUCACq2SXhtyjPVTakA6RJeu8nUBwCo2SbhtV2mPjxpCQGieLYQAKzCiGdel6Ebz1pCDUSStjk6AQCV2ia+fj01kHiMdZfwV37P1BUAqNEfCa/tSl0NUHIZb0pinmTrBQDUZ5vw2iKjD6lsgHxJebGZESIAmjfiWZf0LPVUMkD2ia9/laMTAFCZ1GfdPkcnqmdmd5bmRek+A0AuZvYi8Zl4V7K/pY8y2Se+fpehDwBQi13i6/cZ+rAMZnaypLQFgJwsfVZm3bVhM7tP/IXtSvcZALyZ2S7xWXhfus/FmdlF4i+NUQiA5lj66OOidJ+LM7NN4i/NzOxt6X4DgBczez'+
			'viObgp3e8qmNlN4i/u3liRBaAB1q+8Sp3Kvynd72qY2Tbxl2dm9ql0vwFgKjP7NOL5ty3d76pY+ijEjII6gAWz9MK5GaOP/2XjRiH3ZnZUuu8AkMrMjix96sqM0ceP2bhRyFejHgJgQayve3wd8bxj9PEz1ifyGNRDACyGjat7mDHj8jRL3xfy6LJ03wHgOWZ2OfIZx76P51g/tLsjRAC0ZkJ43BlT9cPYuII6IQKgWhPCw4zCeRobP5Vl1s8vktYAirN+VmVszcOMqat0Nn6VwqOvRsEJQEHWLwya+hzjy/AY1p+TNWad9KN7Y7MhgAKs3yQ49fm1Kf0+Fs2m1UMeMaUFYBY2fcrq0bb0e2mCjdvu/7174xRfABlZf6rulFHHo13p99IU8wkRs3453K70+wHQjvh8unN6Ru1Kv58mmV+ImPUf9ltjagvACNZPVb01'+
			'v+AwIzzyMt8QeXRpa79bGMAgZnZi0/Z0/Myu9HtbBcsTIo9uzOy9UcACoL8X8ry3cYe9DrUr/T7HCKU7MFZ8wH+SlHsKqjv481fmnwWgvN8kbQ7+5PQg6XUIYZ/552Sx2ACR+n0i6kOEDYMAluZWfXh0pTsy1r9Kd2CKEEIXQngp6UPpvgBAgg+SjpccHtLCRyCH4pTWpfIPOQFgrE7S6VKnrL636BHIofiBMBoBUKsPkl62Eh5SQyOQQ9YfonghaVu4KwCwl/QuhHBbuiPemhmBHAoh3IYQjiUdq//wAGBue/V1juMWw0NqdATyvVgfORMjEgD57SWdtzRV9TOrCJBHcdnvG0k75d8/AmA9HiRdSfq49JVVKVYVIIesP7rklfpRyaZoZwAsUad+tPE5hHBdtitlrDZADsWi+1bSH+o3JW5K9gdAlTr1m/++SNq3Wt'+
			'dIQYD8gPUn9D4GyUbSr2K3O7Amt5L+q2/HGN2GEB5KdggAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAqvH/M8HP3FKYGIQAAAAASUVORK5CYII=';
		me._unmute__img.ggOverSrc=hs;
		el.ggId="unmute";
		el.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		el.ggVisible=false;
		el.className="ggskin ggskin_button ";
		el.ggType='button';
		hs ='';
		hs+='bottom : 0px;';
		hs+='cursor : pointer;';
		hs+='height : 40px;';
		hs+='position : absolute;';
		hs+='right : 0px;';
		hs+='visibility : hidden;';
		hs+='width : 40px;';
		hs+='pointer-events:auto;';
		el.setAttribute('style',hs);
		el.style[domTransform + 'Origin']='50% 50%';
		me._unmute.ggIsActive=function() {
			if ((this.parentNode) && (this.parentNode.ggIsActive)) {
				return this.parentNode.ggIsActive();
			}
			return false;
		}
		el.ggElementNodeId=function() {
			if ((this.parentNode) && (this.parentNode.ggElementNodeId)) {
				return this.parentNode.ggElementNodeId();
			}
			return player.getCurrentNode();
		}
		me._unmute.onclick=function (e) {
			player.setVolume("_main",1);
			me._unmute.style[domTransition]='none';
			me._unmute.style.visibility='hidden';
			me._unmute.ggVisible=false;
			me._mute.style[domTransition]='none';
			me._mute.style.visibility=(Number(me._mute.style.opacity)>0||!me._mute.style.opacity)?'inherit':'hidden';
			me._mute.ggVisible=true;
		}
		me._unmute.onmouseover=function (e) {
			me._unmute__img.src=me._unmute__img.ggOverSrc;
		}
		me._unmute.onmouseout=function (e) {
			me._unmute__img.src=me._unmute__img.ggNormalSrc;
		}
		me._unmute.ggUpdatePosition=function (useTransition) {
		}
		me._button_mute.appendChild(me._unmute);
		el=me._mute=document.createElement('div');
		els=me._mute__img=document.createElement('img');
		els.className='ggskin ggskin_mute';
		hs='data:image/png;base64,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';
		els.setAttribute('src',hs);
		els.ggNormalSrc=hs;
		els.setAttribute('style','position: absolute;top: 0px;left: 0px;width: 100%;height: 100%;-webkit-user-drag:none;pointer-events:none;;');
		els.className='ggskin ggskin_button';
		els['ondragstart']=function() { return false; };
		player.checkLoaded.push(els);
		el.appendChild(els);
		el.ggSubElement = els;
		hs='data:image/png;base64,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';
		me._mute__img.ggOverSrc=hs;
		el.ggId="mute";
		el.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		el.ggVisible=true;
		el.className="ggskin ggskin_button ";
		el.ggType='button';
		hs ='';
		hs+='bottom : 0px;';
		hs+='cursor : pointer;';
		hs+='height : 40px;';
		hs+='position : absolute;';
		hs+='right : 0px;';
		hs+='visibility : inherit;';
		hs+='width : 40px;';
		hs+='pointer-events:auto;';
		el.setAttribute('style',hs);
		el.style[domTransform + 'Origin']='50% 50%';
		me._mute.ggIsActive=function() {
			if ((this.parentNode) && (this.parentNode.ggIsActive)) {
				return this.parentNode.ggIsActive();
			}
			return false;
		}
		el.ggElementNodeId=function() {
			if ((this.parentNode) && (this.parentNode.ggElementNodeId)) {
				return this.parentNode.ggElementNodeId();
			}
			return player.getCurrentNode();
		}
		me._mute.onclick=function (e) {
			player.setVolume("_main",0);
			me._mute.style[domTransition]='none';
			me._mute.style.visibility='hidden';
			me._mute.ggVisible=false;
			me._unmute.style[domTransition]='none';
			me._unmute.style.visibility=(Number(me._unmute.style.opacity)>0||!me._unmute.style.opacity)?'inherit':'hidden';
			me._unmute.ggVisible=true;
		}
		me._mute.onmouseover=function (e) {
			me._mute__img.src=me._mute__img.ggOverSrc;
		}
		me._mute.onmouseout=function (e) {
			me._mute__img.src=me._mute__img.ggNormalSrc;
		}
		me._mute.ggUpdatePosition=function (useTransition) {
		}
		me._button_mute.appendChild(me._mute);
		me.divSkin.appendChild(me._button_mute);
		this.preloadImages();
		player.addListener('sizechanged', function() {
			me.updateSize(me.divSkin);
		});
		player.addListener('configloaded', function() {
			me._dropdown_cloner1.ggUpdate();
			me._dropdown_cloner0.ggUpdate();
			me._dropdown_cloner.ggUpdate();
		});
		player.addListener('imagesready', function() {
			me._dropdown_scrollarea1.ggUpdatePosition();
			me._dropdown_scrollarea0.ggUpdatePosition();
			me._dropdown_scrollarea.ggUpdatePosition();
		});
	};
	this.hotspotProxyClick=function(id, url) {
	}
	this.hotspotProxyDoubleClick=function(id, url) {
	}
	me.hotspotProxyOver=function(id, url) {
	}
	me.hotspotProxyOut=function(id, url) {
	}
	player.addListener('changenode', function() {
		me.ggUserdata=player.userdata;
	});
	me.skinTimerEvent=function() {
		me.ggCurrentTime=new Date().getTime();
	};
	player.addListener('timer', me.skinTimerEvent);
	function SkinCloner_dropdown_cloner1_Class(nodeId, parentScope,ggParent,parameter) {
		var me=this;
		var hs='';
		me.parentScope=parentScope;
		me.ggParent=ggParent;
		me.findElements=skin.findElements;
		me.ggIndex=parameter.index;
		me.ggNodeId=nodeId;
		me.ggTitle=parameter.title;
		me.ggUserdata=skin.player.getNodeUserdata(me.ggNodeId);
		me.elementMouseDown={};
		me.elementMouseOver={};
		me.__div=document.createElement('div');
		me.__div.setAttribute('style','position: absolute;width: 169px; height: 24px; visibility: inherit; overflow: visible;');
		me.__div.style.left=parameter.left;
		me.__div.style.top=parameter.top;
		me.__div.ggIsActive = function() {
			return player.getCurrentNode()==me.ggNodeId;
		}
		me.__div.ggElementNodeId=function() {
			return me.ggNodeId;
		}
		el=me._dropdown_menu_text1=document.createElement('div');
		els=me._dropdown_menu_text1__text=document.createElement('div');
		el.className='ggskin ggskin_textdiv';
		el.ggTextDiv=els;
		el.ggId="Dropdown Menu Text";
		el.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		el.ggVisible=true;
		el.className="ggskin ggskin_text ";
		el.ggType='text';
		hs ='';
		hs+='cursor : pointer;';
		hs+='height : 20px;';
		hs+='left : 15px;';
		hs+='position : absolute;';
		hs+='top : 3px;';
		hs+='visibility : inherit;';
		hs+='width : 150px;';
		hs+='pointer-events:auto;';
		el.setAttribute('style',hs);
		el.style[domTransform + 'Origin']='50% 50%';
		hs ='position:absolute;';
		hs += 'box-sizing: border-box;';
		hs+='left: 0px;';
		hs+='top:  0px;';
		hs+='width: 150px;';
		hs+='height: 20px;';
		hs+='background: #efefef;';
		hs+='background: rgba(239,239,239,0.784314);';
		hs+='border: 0px solid #848484;';
		hs+='color: rgba(0,0,0,1);';
		hs+='text-align: center;';
		hs+='white-space: nowrap;';
		hs+='padding: 2px 3px 2px 3px;';
		hs+='overflow: hidden;';
		els.setAttribute('style',hs);
		els.innerHTML=me.ggUserdata.title;
		el.appendChild(els);
		me._dropdown_menu_text1.ggIsActive=function() {
			if ((this.parentNode) && (this.parentNode.ggIsActive)) {
				return this.parentNode.ggIsActive();
			}
			return false;
		}
		el.ggElementNodeId=function() {
			if ((this.parentNode) && (this.parentNode.ggElementNodeId)) {
				return this.parentNode.ggElementNodeId();
			}
			return player.getCurrentNode();
		}
		me._dropdown_menu_text1.logicBlock_backgroundcolor = function() {
			var newLogicStateBackgroundColor;
			if (
				((me.elementMouseOver['dropdown_menu_text1'] == true))
			)
			{
				newLogicStateBackgroundColor = 0;
			}
			else if (
				((me._dropdown_menu_text1.ggIsActive() == true))
			)
			{
				newLogicStateBackgroundColor = 1;
			}
			else {
				newLogicStateBackgroundColor = -1;
			}
			if (me._dropdown_menu_text1.ggCurrentLogicStateBackgroundColor != newLogicStateBackgroundColor) {
				me._dropdown_menu_text1.ggCurrentLogicStateBackgroundColor = newLogicStateBackgroundColor;
				me._dropdown_menu_text1__text.style[domTransition]='background-color 0s';
				if (me._dropdown_menu_text1.ggCurrentLogicStateBackgroundColor == 0) {
					me._dropdown_menu_text1__text.style.backgroundColor="rgba(255,255,255,1)";
				}
				else if (me._dropdown_menu_text1.ggCurrentLogicStateBackgroundColor == 1) {
					me._dropdown_menu_text1__text.style.backgroundColor="rgba(255,255,255,1)";
				}
				else {
					me._dropdown_menu_text1__text.style.backgroundColor="rgba(239,239,239,0.784314)";
				}
			}
		}
		me._dropdown_menu_text1.onclick=function (e) {
			if (
				(
					((me._dropdown_menu_text1.ggIsActive() == false))
				)
			) {
				player.openNext("{"+me.ggNodeId+"}",player.hotspot.target);
			}
			skin._dropdown_menu_title_background1.onclick();
		}
		me._dropdown_menu_text1.onmouseover=function (e) {
			me.elementMouseOver['dropdown_menu_text1']=true;
			me._dropdown_menu_text1.logicBlock_backgroundcolor();
		}
		me._dropdown_menu_text1.onmouseout=function (e) {
			if (e && e.toElement) {
				var current = e.toElement;
				while (current = current.parentNode) {
				if (current == me._dropdown_menu_text1__text)
					return;
				}
			}
			me.elementMouseOver['dropdown_menu_text1']=false;
			me._dropdown_menu_text1.logicBlock_backgroundcolor();
		}
		me._dropdown_menu_text1.ontouchend=function (e) {
			me.elementMouseOver['dropdown_menu_text1']=false;
			me._dropdown_menu_text1.logicBlock_backgroundcolor();
		}
		me._dropdown_menu_text1.ggUpdatePosition=function (useTransition) {
		}
		me.__div.appendChild(me._dropdown_menu_text1);
		el=me._dropdown_checkmark1=document.createElement('div');
		els=me._dropdown_checkmark1__img=document.createElement('img');
		els.className='ggskin ggskin_svg';
		hs='data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0nMS4wJyBlbmNvZGluZz0ndXRmLTgnPz4KPCFET0NUWVBFIHN2ZyBQVUJMSUMgJy0vL1czQy8vRFREIFNWRyAxLjEvL0VOJyAnaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkJz4KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE2LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPgo8c3ZnIHhtbG5zOmdyYXBoPSJodHRwOi8vbnMuYWRvYmUuY29tL0dyYXBocy8xLjAvIiB4bWxuczphPSJodHRwOi8vbnMuYWRvYmUuY29tL0Fkb2JlU1ZHVmlld2VyRXh0ZW5zaW9ucy'+
			'8zLjAvIiB3aWR0aD0iMzJweCIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgeG1sbnM6aT0iaHR0cDovL25zLmFkb2JlLmNvbS9BZG9iZUlsbHVzdHJhdG9yLzEwLjAvIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeT0iMHB4IiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGhlaWdodD0iMzJweCIgeD0iMHB4IiB2ZXJzaW9uPSIxLjEiIHhtbG5zOng9Imh0dHA6Ly9ucy5hZG9iZS5jb20vRXh0ZW5zaWJpbGl0eS8xLjAvIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IC0zNzIyIC0yNjA2IDMyIDMyIiB2aWV3Qm94PSItMzcyMiAtMjYwNiAzMiAzMiI+CiA8'+
			'ZyBpZD0iTGF5ZXJfMSIvPgogPGcgaWQ9IkViZW5lXzEiLz4KIDxnIGlkPSJMYXllcl8yIj4KICA8Zz4KICAgPGc+CiAgICA8cGF0aCBkPSJNLTM2OTUuNDczLTI1OTguMTQ2Yy0wLjUxOS0wLjUxOS0xLjM2MS0wLjUxOS0xLjg3OSwwbC04Ljc4Nyw4Ljc4N2wtMi4yOTEtMi4yNDMmI3hhOyYjeDk7JiN4OTsmI3g5OyYjeDk7Yy0wLjUyNS0wLjUxMy0xLjM2Ni0wLjUwNC0xLjg4LDAuMDJjLTAuNTEzLDAuNTI1LTAuNTA0LDEuMzY3LDAuMDIxLDEuODhsMy4yMywzLjE2M2MwLjI1OSwwLjI1MywwLjU5NCwwLjM3OSwwLjkzLDAuMzc5JiN4YTsmI3g5OyYjeDk7JiN4OTsmI3g5O2MwLjM0LDAsMC42OC'+
			'0wLjEzLDAuOTQtMC4zOWw5LjcxNy05LjcxN0MtMzY5NC45NTQtMjU5Ni43ODUtMzY5NC45NTQtMjU5Ny42MjYtMzY5NS40NzMtMjU5OC4xNDZ6IiBmaWxsPSIjRkZGRkZGIi8+CiAgICA8cGF0aCBkPSJNLTM2OTkuOTYtMjU4My44MzdoLTEyLjMyNXYtMTIuMzI2aDExLjgyMWwyLjI1Mi0yLjI1MmMtMC4xNjYtMC4wODYtMC4zNTItMC4xNDEtMC41NTItMC4xNDFoLTE0LjcxOCYjeGE7JiN4OTsmI3g5OyYjeDk7JiN4OTtjLTAuNjYxLDAtMS4xOTYsMC41MzYtMS4xOTYsMS4xOTZ2MTQuNzE5YzAsMC42NiwwLjUzNSwxLjE5NiwxLjE5NiwxLjE5NmgxNC43MThjMC42NjEsMCwxLjE5Ny0wLjUzNiwx'+
			'LjE5Ny0xLjE5NnYtMTAuNDAzJiN4YTsmI3g5OyYjeDk7JiN4OTsmI3g5O2wtMi4zOTMsMi4zOTNWLTI1ODMuODM3eiIgZmlsbD0iI0ZGRkZGRiIvPgogICA8L2c+CiAgIDxnIGE6YWRvYmUtYmxlbmRpbmctbW9kZT0ibXVsdGlwbHkiIG9wYWNpdHk9IjAuNCI+CiAgICA8cGF0aCBzdHJva2Utd2lkdGg9IjEuNSIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBkPSImI3hhOyYjeDk7JiN4OTsmI3g5OyYjeDk7TS0zNjk1LjQ3My0yNTk4LjE0NmMtMC41MTktMC41MTktMS4zNjEtMC41MTktMS44NzksMGwtOC43ODcsOC43ODdsLTIuMjkxLTIuMjQzYy0wLjUyNS0wLjUxMy0xLjM2Ni0wLjUwNC0xLjg4LD'+
			'AuMDImI3hhOyYjeDk7JiN4OTsmI3g5OyYjeDk7Yy0wLjUxMywwLjUyNS0wLjUwNCwxLjM2NywwLjAyMSwxLjg4bDMuMjMsMy4xNjNjMC4yNTksMC4yNTMsMC41OTQsMC4zNzksMC45MywwLjM3OWMwLjM0LDAsMC42OC0wLjEzLDAuOTQtMC4zOWw5LjcxNy05LjcxNyYjeGE7JiN4OTsmI3g5OyYjeDk7JiN4OTtDLTM2OTQuOTU0LTI1OTYuNzg1LTM2OTQuOTU0LTI1OTcuNjI2LTM2OTUuNDczLTI1OTguMTQ2eiIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIgc3Ryb2tlPSIjMUExNzFCIiBhOmFkb2JlLWJsZW5kaW5nLW1vZGU9Im5vcm1hbCIgZmlsbD0ibm9uZSIvPgogICAgPHBhdGggc3Ryb2tlLXdp'+
			'ZHRoPSIxLjUiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgZD0iJiN4YTsmI3g5OyYjeDk7JiN4OTsmI3g5O00tMzY5OS45Ni0yNTgzLjgzN2gtMTIuMzI1di0xMi4zMjZoMTEuODIxbDIuMjUyLTIuMjUyYy0wLjE2Ni0wLjA4Ni0wLjM1Mi0wLjE0MS0wLjU1Mi0wLjE0MWgtMTQuNzE4JiN4YTsmI3g5OyYjeDk7JiN4OTsmI3g5O2MtMC42NjEsMC0xLjE5NiwwLjUzNi0xLjE5NiwxLjE5NnYxNC43MTljMCwwLjY2LDAuNTM1LDEuMTk2LDEuMTk2LDEuMTk2aDE0LjcxOGMwLjY2MSwwLDEuMTk3LTAuNTM2LDEuMTk3LTEuMTk2di0xMC40MDMmI3hhOyYjeDk7JiN4OTsmI3g5OyYjeDk7bC0yLjM5MywyLj'+
			'M5M1YtMjU4My44Mzd6IiBzdHJva2UtbGluZWpvaW49InJvdW5kIiBzdHJva2U9IiMxQTE3MUIiIGE6YWRvYmUtYmxlbmRpbmctbW9kZT0ibm9ybWFsIiBmaWxsPSJub25lIi8+CiAgIDwvZz4KICAgPGc+CiAgICA8cGF0aCBkPSJNLTM2OTUuNDczLTI1OTguMTQ2Yy0wLjUxOS0wLjUxOS0xLjM2MS0wLjUxOS0xLjg3OSwwbC04Ljc4Nyw4Ljc4N2wtMi4yOTEtMi4yNDMmI3hhOyYjeDk7JiN4OTsmI3g5OyYjeDk7Yy0wLjUyNS0wLjUxMy0xLjM2Ni0wLjUwNC0xLjg4LDAuMDJjLTAuNTEzLDAuNTI1LTAuNTA0LDEuMzY3LDAuMDIxLDEuODhsMy4yMywzLjE2M2MwLjI1OSwwLjI1MywwLjU5NCwwLjM3'+
			'OSwwLjkzLDAuMzc5JiN4YTsmI3g5OyYjeDk7JiN4OTsmI3g5O2MwLjM0LDAsMC42OC0wLjEzLDAuOTQtMC4zOWw5LjcxNy05LjcxN0MtMzY5NC45NTQtMjU5Ni43ODUtMzY5NC45NTQtMjU5Ny42MjYtMzY5NS40NzMtMjU5OC4xNDZ6IiBmaWxsPSIjRkZGRkZGIi8+CiAgICA8cGF0aCBkPSJNLTM2OTkuOTYtMjU4My44MzdoLTEyLjMyNXYtMTIuMzI2aDExLjgyMWwyLjI1Mi0yLjI1MmMtMC4xNjYtMC4wODYtMC4zNTItMC4xNDEtMC41NTItMC4xNDFoLTE0LjcxOCYjeGE7JiN4OTsmI3g5OyYjeDk7JiN4OTtjLTAuNjYxLDAtMS4xOTYsMC41MzYtMS4xOTYsMS4xOTZ2MTQuNzE5YzAsMC42NiwwLj'+
			'UzNSwxLjE5NiwxLjE5NiwxLjE5NmgxNC43MThjMC42NjEsMCwxLjE5Ny0wLjUzNiwxLjE5Ny0xLjE5NnYtMTAuNDAzJiN4YTsmI3g5OyYjeDk7JiN4OTsmI3g5O2wtMi4zOTMsMi4zOTNWLTI1ODMuODM3eiIgZmlsbD0iI0ZGRkZGRiIvPgogICA8L2c+CiAgIDxnPgogICAgPHBhdGggc3Ryb2tlLXdpZHRoPSIwLjIiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgZD0iTS0zNjk1LjQ3My0yNTk4LjE0NiYjeGE7JiN4OTsmI3g5OyYjeDk7JiN4OTtjLTAuNTE5LTAuNTE5LTEuMzYxLTAuNTE5LTEuODc5LDBsLTguNzg3LDguNzg3bC0yLjI5MS0yLjI0M2MtMC41MjUtMC41MTMtMS4zNjYtMC41MDQtMS44'+
			'OCwwLjAyJiN4YTsmI3g5OyYjeDk7JiN4OTsmI3g5O2MtMC41MTMsMC41MjUtMC41MDQsMS4zNjcsMC4wMjEsMS44OGwzLjIzLDMuMTYzYzAuMjU5LDAuMjUzLDAuNTk0LDAuMzc5LDAuOTMsMC4zNzljMC4zNCwwLDAuNjgtMC4xMywwLjk0LTAuMzlsOS43MTctOS43MTcmI3hhOyYjeDk7JiN4OTsmI3g5OyYjeDk7Qy0zNjk0Ljk1NC0yNTk2Ljc4NS0zNjk0Ljk1NC0yNTk3LjYyNi0zNjk1LjQ3My0yNTk4LjE0NnoiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIHN0cm9rZT0iIzFBMTcxQiIgZmlsbD0ibm9uZSIvPgogICAgPHBhdGggc3Ryb2tlLXdpZHRoPSIwLjIiIHN0cm9rZS1saW5lY2FwPSJyb3'+
			'VuZCIgZD0iTS0zNjk5Ljk2LTI1ODMuODM3JiN4YTsmI3g5OyYjeDk7JiN4OTsmI3g5O2gtMTIuMzI1di0xMi4zMjZoMTEuODIxbDIuMjUyLTIuMjUyYy0wLjE2Ni0wLjA4Ni0wLjM1Mi0wLjE0MS0wLjU1Mi0wLjE0MWgtMTQuNzE4Yy0wLjY2MSwwLTEuMTk2LDAuNTM2LTEuMTk2LDEuMTk2djE0LjcxOSYjeGE7JiN4OTsmI3g5OyYjeDk7JiN4OTtjMCwwLjY2LDAuNTM1LDEuMTk2LDEuMTk2LDEuMTk2aDE0LjcxOGMwLjY2MSwwLDEuMTk3LTAuNTM2LDEuMTk3LTEuMTk2di0xMC40MDNsLTIuMzkzLDIuMzkzVi0yNTgzLjgzN3oiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIHN0cm9rZT0iIzFBMTcx'+
			'QiIgZmlsbD0ibm9uZSIvPgogICA8L2c+CiAgPC9nPgogPC9nPgo8L3N2Zz4K';
		me._dropdown_checkmark1__img.setAttribute('src',hs);
		els.setAttribute('style','position: absolute;top: 0px;left: 0px;width: 100%;height: 100%;-webkit-user-drag:none;pointer-events:none;;');
		els['ondragstart']=function() { return false; };
		el.appendChild(els);
		el.ggSubElement = els;
		el.ggId="Dropdown Checkmark";
		el.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		el.ggVisible=true;
		el.className="ggskin ggskin_svg ";
		el.ggType='svg';
		hs ='';
		hs+='height : 22px;';
		hs+='left : 0px;';
		hs+='opacity : 0;';
		hs+='position : absolute;';
		hs+='top : 0px;';
		hs+='visibility : hidden;';
		hs+='width : 22px;';
		hs+='pointer-events:auto;';
		el.setAttribute('style',hs);
		el.style[domTransform + 'Origin']='50% 50%';
		me._dropdown_checkmark1.ggIsActive=function() {
			if ((this.parentNode) && (this.parentNode.ggIsActive)) {
				return this.parentNode.ggIsActive();
			}
			return false;
		}
		el.ggElementNodeId=function() {
			if ((this.parentNode) && (this.parentNode.ggElementNodeId)) {
				return this.parentNode.ggElementNodeId();
			}
			return player.getCurrentNode();
		}
		me._dropdown_checkmark1.logicBlock_alpha = function() {
			var newLogicStateAlpha;
			if (
				((player.nodeVisited(me._dropdown_checkmark1.ggElementNodeId()) == true)) || 
				((me._dropdown_checkmark1.ggIsActive() == true))
			)
			{
				newLogicStateAlpha = 0;
			}
			else {
				newLogicStateAlpha = -1;
			}
			if (me._dropdown_checkmark1.ggCurrentLogicStateAlpha != newLogicStateAlpha) {
				me._dropdown_checkmark1.ggCurrentLogicStateAlpha = newLogicStateAlpha;
				me._dropdown_checkmark1.style[domTransition]='opacity 0s';
				if (me._dropdown_checkmark1.ggCurrentLogicStateAlpha == 0) {
					me._dropdown_checkmark1.style.visibility=me._dropdown_checkmark1.ggVisible?'inherit':'hidden';
					me._dropdown_checkmark1.style.opacity=1;
				}
				else {
					me._dropdown_checkmark1.style.visibility="hidden";
					me._dropdown_checkmark1.style.opacity=0;
				}
			}
		}
		me._dropdown_checkmark1.ggUpdatePosition=function (useTransition) {
		}
		me.__div.appendChild(me._dropdown_checkmark1);
	};
	function SkinCloner_dropdown_cloner0_Class(nodeId, parentScope,ggParent,parameter) {
		var me=this;
		var hs='';
		me.parentScope=parentScope;
		me.ggParent=ggParent;
		me.findElements=skin.findElements;
		me.ggIndex=parameter.index;
		me.ggNodeId=nodeId;
		me.ggTitle=parameter.title;
		me.ggUserdata=skin.player.getNodeUserdata(me.ggNodeId);
		me.elementMouseDown={};
		me.elementMouseOver={};
		me.__div=document.createElement('div');
		me.__div.setAttribute('style','position: absolute;width: 169px; height: 24px; visibility: inherit; overflow: visible;');
		me.__div.style.left=parameter.left;
		me.__div.style.top=parameter.top;
		me.__div.ggIsActive = function() {
			return player.getCurrentNode()==me.ggNodeId;
		}
		me.__div.ggElementNodeId=function() {
			return me.ggNodeId;
		}
		el=me._dropdown_menu_text0=document.createElement('div');
		els=me._dropdown_menu_text0__text=document.createElement('div');
		el.className='ggskin ggskin_textdiv';
		el.ggTextDiv=els;
		el.ggId="Dropdown Menu Text";
		el.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		el.ggVisible=true;
		el.className="ggskin ggskin_text ";
		el.ggType='text';
		hs ='';
		hs+='cursor : pointer;';
		hs+='height : 20px;';
		hs+='left : 15px;';
		hs+='position : absolute;';
		hs+='top : 3px;';
		hs+='visibility : inherit;';
		hs+='width : 150px;';
		hs+='pointer-events:auto;';
		el.setAttribute('style',hs);
		el.style[domTransform + 'Origin']='50% 50%';
		hs ='position:absolute;';
		hs += 'box-sizing: border-box;';
		hs+='left: 0px;';
		hs+='top:  0px;';
		hs+='width: 150px;';
		hs+='height: 20px;';
		hs+='background: #efefef;';
		hs+='background: rgba(239,239,239,0.784314);';
		hs+='border: 0px solid #848484;';
		hs+='color: rgba(0,0,0,1);';
		hs+='text-align: center;';
		hs+='white-space: nowrap;';
		hs+='padding: 2px 3px 2px 3px;';
		hs+='overflow: hidden;';
		els.setAttribute('style',hs);
		els.innerHTML=me.ggUserdata.title;
		el.appendChild(els);
		me._dropdown_menu_text0.ggIsActive=function() {
			if ((this.parentNode) && (this.parentNode.ggIsActive)) {
				return this.parentNode.ggIsActive();
			}
			return false;
		}
		el.ggElementNodeId=function() {
			if ((this.parentNode) && (this.parentNode.ggElementNodeId)) {
				return this.parentNode.ggElementNodeId();
			}
			return player.getCurrentNode();
		}
		me._dropdown_menu_text0.logicBlock_backgroundcolor = function() {
			var newLogicStateBackgroundColor;
			if (
				((me.elementMouseOver['dropdown_menu_text0'] == true))
			)
			{
				newLogicStateBackgroundColor = 0;
			}
			else if (
				((me._dropdown_menu_text0.ggIsActive() == true))
			)
			{
				newLogicStateBackgroundColor = 1;
			}
			else {
				newLogicStateBackgroundColor = -1;
			}
			if (me._dropdown_menu_text0.ggCurrentLogicStateBackgroundColor != newLogicStateBackgroundColor) {
				me._dropdown_menu_text0.ggCurrentLogicStateBackgroundColor = newLogicStateBackgroundColor;
				me._dropdown_menu_text0__text.style[domTransition]='background-color 0s';
				if (me._dropdown_menu_text0.ggCurrentLogicStateBackgroundColor == 0) {
					me._dropdown_menu_text0__text.style.backgroundColor="rgba(255,255,255,1)";
				}
				else if (me._dropdown_menu_text0.ggCurrentLogicStateBackgroundColor == 1) {
					me._dropdown_menu_text0__text.style.backgroundColor="rgba(255,255,255,1)";
				}
				else {
					me._dropdown_menu_text0__text.style.backgroundColor="rgba(239,239,239,0.784314)";
				}
			}
		}
		me._dropdown_menu_text0.onclick=function (e) {
			if (
				(
					((me._dropdown_menu_text0.ggIsActive() == false))
				)
			) {
				player.openNext("{"+me.ggNodeId+"}",player.hotspot.target);
			}
			skin._dropdown_menu_title_background1.onclick();
		}
		me._dropdown_menu_text0.onmouseover=function (e) {
			me.elementMouseOver['dropdown_menu_text0']=true;
			me._dropdown_menu_text0.logicBlock_backgroundcolor();
		}
		me._dropdown_menu_text0.onmouseout=function (e) {
			if (e && e.toElement) {
				var current = e.toElement;
				while (current = current.parentNode) {
				if (current == me._dropdown_menu_text0__text)
					return;
				}
			}
			me.elementMouseOver['dropdown_menu_text0']=false;
			me._dropdown_menu_text0.logicBlock_backgroundcolor();
		}
		me._dropdown_menu_text0.ontouchend=function (e) {
			me.elementMouseOver['dropdown_menu_text0']=false;
			me._dropdown_menu_text0.logicBlock_backgroundcolor();
		}
		me._dropdown_menu_text0.ggUpdatePosition=function (useTransition) {
		}
		me.__div.appendChild(me._dropdown_menu_text0);
		el=me._dropdown_checkmark0=document.createElement('div');
		els=me._dropdown_checkmark0__img=document.createElement('img');
		els.className='ggskin ggskin_svg';
		hs='data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0nMS4wJyBlbmNvZGluZz0ndXRmLTgnPz4KPCFET0NUWVBFIHN2ZyBQVUJMSUMgJy0vL1czQy8vRFREIFNWRyAxLjEvL0VOJyAnaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkJz4KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE2LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPgo8c3ZnIHhtbG5zOmdyYXBoPSJodHRwOi8vbnMuYWRvYmUuY29tL0dyYXBocy8xLjAvIiB4bWxuczphPSJodHRwOi8vbnMuYWRvYmUuY29tL0Fkb2JlU1ZHVmlld2VyRXh0ZW5zaW9ucy'+
			'8zLjAvIiB3aWR0aD0iMzJweCIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgeG1sbnM6aT0iaHR0cDovL25zLmFkb2JlLmNvbS9BZG9iZUlsbHVzdHJhdG9yLzEwLjAvIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeT0iMHB4IiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGhlaWdodD0iMzJweCIgeD0iMHB4IiB2ZXJzaW9uPSIxLjEiIHhtbG5zOng9Imh0dHA6Ly9ucy5hZG9iZS5jb20vRXh0ZW5zaWJpbGl0eS8xLjAvIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IC0zNzIyIC0yNjA2IDMyIDMyIiB2aWV3Qm94PSItMzcyMiAtMjYwNiAzMiAzMiI+CiA8'+
			'ZyBpZD0iTGF5ZXJfMSIvPgogPGcgaWQ9IkViZW5lXzEiLz4KIDxnIGlkPSJMYXllcl8yIj4KICA8Zz4KICAgPGc+CiAgICA8cGF0aCBkPSJNLTM2OTUuNDczLTI1OTguMTQ2Yy0wLjUxOS0wLjUxOS0xLjM2MS0wLjUxOS0xLjg3OSwwbC04Ljc4Nyw4Ljc4N2wtMi4yOTEtMi4yNDMmI3hhOyYjeDk7JiN4OTsmI3g5OyYjeDk7Yy0wLjUyNS0wLjUxMy0xLjM2Ni0wLjUwNC0xLjg4LDAuMDJjLTAuNTEzLDAuNTI1LTAuNTA0LDEuMzY3LDAuMDIxLDEuODhsMy4yMywzLjE2M2MwLjI1OSwwLjI1MywwLjU5NCwwLjM3OSwwLjkzLDAuMzc5JiN4YTsmI3g5OyYjeDk7JiN4OTsmI3g5O2MwLjM0LDAsMC42OC'+
			'0wLjEzLDAuOTQtMC4zOWw5LjcxNy05LjcxN0MtMzY5NC45NTQtMjU5Ni43ODUtMzY5NC45NTQtMjU5Ny42MjYtMzY5NS40NzMtMjU5OC4xNDZ6IiBmaWxsPSIjRkZGRkZGIi8+CiAgICA8cGF0aCBkPSJNLTM2OTkuOTYtMjU4My44MzdoLTEyLjMyNXYtMTIuMzI2aDExLjgyMWwyLjI1Mi0yLjI1MmMtMC4xNjYtMC4wODYtMC4zNTItMC4xNDEtMC41NTItMC4xNDFoLTE0LjcxOCYjeGE7JiN4OTsmI3g5OyYjeDk7JiN4OTtjLTAuNjYxLDAtMS4xOTYsMC41MzYtMS4xOTYsMS4xOTZ2MTQuNzE5YzAsMC42NiwwLjUzNSwxLjE5NiwxLjE5NiwxLjE5NmgxNC43MThjMC42NjEsMCwxLjE5Ny0wLjUzNiwx'+
			'LjE5Ny0xLjE5NnYtMTAuNDAzJiN4YTsmI3g5OyYjeDk7JiN4OTsmI3g5O2wtMi4zOTMsMi4zOTNWLTI1ODMuODM3eiIgZmlsbD0iI0ZGRkZGRiIvPgogICA8L2c+CiAgIDxnIGE6YWRvYmUtYmxlbmRpbmctbW9kZT0ibXVsdGlwbHkiIG9wYWNpdHk9IjAuNCI+CiAgICA8cGF0aCBzdHJva2Utd2lkdGg9IjEuNSIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBkPSImI3hhOyYjeDk7JiN4OTsmI3g5OyYjeDk7TS0zNjk1LjQ3My0yNTk4LjE0NmMtMC41MTktMC41MTktMS4zNjEtMC41MTktMS44NzksMGwtOC43ODcsOC43ODdsLTIuMjkxLTIuMjQzYy0wLjUyNS0wLjUxMy0xLjM2Ni0wLjUwNC0xLjg4LD'+
			'AuMDImI3hhOyYjeDk7JiN4OTsmI3g5OyYjeDk7Yy0wLjUxMywwLjUyNS0wLjUwNCwxLjM2NywwLjAyMSwxLjg4bDMuMjMsMy4xNjNjMC4yNTksMC4yNTMsMC41OTQsMC4zNzksMC45MywwLjM3OWMwLjM0LDAsMC42OC0wLjEzLDAuOTQtMC4zOWw5LjcxNy05LjcxNyYjeGE7JiN4OTsmI3g5OyYjeDk7JiN4OTtDLTM2OTQuOTU0LTI1OTYuNzg1LTM2OTQuOTU0LTI1OTcuNjI2LTM2OTUuNDczLTI1OTguMTQ2eiIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIgc3Ryb2tlPSIjMUExNzFCIiBhOmFkb2JlLWJsZW5kaW5nLW1vZGU9Im5vcm1hbCIgZmlsbD0ibm9uZSIvPgogICAgPHBhdGggc3Ryb2tlLXdp'+
			'ZHRoPSIxLjUiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgZD0iJiN4YTsmI3g5OyYjeDk7JiN4OTsmI3g5O00tMzY5OS45Ni0yNTgzLjgzN2gtMTIuMzI1di0xMi4zMjZoMTEuODIxbDIuMjUyLTIuMjUyYy0wLjE2Ni0wLjA4Ni0wLjM1Mi0wLjE0MS0wLjU1Mi0wLjE0MWgtMTQuNzE4JiN4YTsmI3g5OyYjeDk7JiN4OTsmI3g5O2MtMC42NjEsMC0xLjE5NiwwLjUzNi0xLjE5NiwxLjE5NnYxNC43MTljMCwwLjY2LDAuNTM1LDEuMTk2LDEuMTk2LDEuMTk2aDE0LjcxOGMwLjY2MSwwLDEuMTk3LTAuNTM2LDEuMTk3LTEuMTk2di0xMC40MDMmI3hhOyYjeDk7JiN4OTsmI3g5OyYjeDk7bC0yLjM5MywyLj'+
			'M5M1YtMjU4My44Mzd6IiBzdHJva2UtbGluZWpvaW49InJvdW5kIiBzdHJva2U9IiMxQTE3MUIiIGE6YWRvYmUtYmxlbmRpbmctbW9kZT0ibm9ybWFsIiBmaWxsPSJub25lIi8+CiAgIDwvZz4KICAgPGc+CiAgICA8cGF0aCBkPSJNLTM2OTUuNDczLTI1OTguMTQ2Yy0wLjUxOS0wLjUxOS0xLjM2MS0wLjUxOS0xLjg3OSwwbC04Ljc4Nyw4Ljc4N2wtMi4yOTEtMi4yNDMmI3hhOyYjeDk7JiN4OTsmI3g5OyYjeDk7Yy0wLjUyNS0wLjUxMy0xLjM2Ni0wLjUwNC0xLjg4LDAuMDJjLTAuNTEzLDAuNTI1LTAuNTA0LDEuMzY3LDAuMDIxLDEuODhsMy4yMywzLjE2M2MwLjI1OSwwLjI1MywwLjU5NCwwLjM3'+
			'OSwwLjkzLDAuMzc5JiN4YTsmI3g5OyYjeDk7JiN4OTsmI3g5O2MwLjM0LDAsMC42OC0wLjEzLDAuOTQtMC4zOWw5LjcxNy05LjcxN0MtMzY5NC45NTQtMjU5Ni43ODUtMzY5NC45NTQtMjU5Ny42MjYtMzY5NS40NzMtMjU5OC4xNDZ6IiBmaWxsPSIjRkZGRkZGIi8+CiAgICA8cGF0aCBkPSJNLTM2OTkuOTYtMjU4My44MzdoLTEyLjMyNXYtMTIuMzI2aDExLjgyMWwyLjI1Mi0yLjI1MmMtMC4xNjYtMC4wODYtMC4zNTItMC4xNDEtMC41NTItMC4xNDFoLTE0LjcxOCYjeGE7JiN4OTsmI3g5OyYjeDk7JiN4OTtjLTAuNjYxLDAtMS4xOTYsMC41MzYtMS4xOTYsMS4xOTZ2MTQuNzE5YzAsMC42NiwwLj'+
			'UzNSwxLjE5NiwxLjE5NiwxLjE5NmgxNC43MThjMC42NjEsMCwxLjE5Ny0wLjUzNiwxLjE5Ny0xLjE5NnYtMTAuNDAzJiN4YTsmI3g5OyYjeDk7JiN4OTsmI3g5O2wtMi4zOTMsMi4zOTNWLTI1ODMuODM3eiIgZmlsbD0iI0ZGRkZGRiIvPgogICA8L2c+CiAgIDxnPgogICAgPHBhdGggc3Ryb2tlLXdpZHRoPSIwLjIiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgZD0iTS0zNjk1LjQ3My0yNTk4LjE0NiYjeGE7JiN4OTsmI3g5OyYjeDk7JiN4OTtjLTAuNTE5LTAuNTE5LTEuMzYxLTAuNTE5LTEuODc5LDBsLTguNzg3LDguNzg3bC0yLjI5MS0yLjI0M2MtMC41MjUtMC41MTMtMS4zNjYtMC41MDQtMS44'+
			'OCwwLjAyJiN4YTsmI3g5OyYjeDk7JiN4OTsmI3g5O2MtMC41MTMsMC41MjUtMC41MDQsMS4zNjcsMC4wMjEsMS44OGwzLjIzLDMuMTYzYzAuMjU5LDAuMjUzLDAuNTk0LDAuMzc5LDAuOTMsMC4zNzljMC4zNCwwLDAuNjgtMC4xMywwLjk0LTAuMzlsOS43MTctOS43MTcmI3hhOyYjeDk7JiN4OTsmI3g5OyYjeDk7Qy0zNjk0Ljk1NC0yNTk2Ljc4NS0zNjk0Ljk1NC0yNTk3LjYyNi0zNjk1LjQ3My0yNTk4LjE0NnoiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIHN0cm9rZT0iIzFBMTcxQiIgZmlsbD0ibm9uZSIvPgogICAgPHBhdGggc3Ryb2tlLXdpZHRoPSIwLjIiIHN0cm9rZS1saW5lY2FwPSJyb3'+
			'VuZCIgZD0iTS0zNjk5Ljk2LTI1ODMuODM3JiN4YTsmI3g5OyYjeDk7JiN4OTsmI3g5O2gtMTIuMzI1di0xMi4zMjZoMTEuODIxbDIuMjUyLTIuMjUyYy0wLjE2Ni0wLjA4Ni0wLjM1Mi0wLjE0MS0wLjU1Mi0wLjE0MWgtMTQuNzE4Yy0wLjY2MSwwLTEuMTk2LDAuNTM2LTEuMTk2LDEuMTk2djE0LjcxOSYjeGE7JiN4OTsmI3g5OyYjeDk7JiN4OTtjMCwwLjY2LDAuNTM1LDEuMTk2LDEuMTk2LDEuMTk2aDE0LjcxOGMwLjY2MSwwLDEuMTk3LTAuNTM2LDEuMTk3LTEuMTk2di0xMC40MDNsLTIuMzkzLDIuMzkzVi0yNTgzLjgzN3oiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIHN0cm9rZT0iIzFBMTcx'+
			'QiIgZmlsbD0ibm9uZSIvPgogICA8L2c+CiAgPC9nPgogPC9nPgo8L3N2Zz4K';
		me._dropdown_checkmark0__img.setAttribute('src',hs);
		els.setAttribute('style','position: absolute;top: 0px;left: 0px;width: 100%;height: 100%;-webkit-user-drag:none;pointer-events:none;;');
		els['ondragstart']=function() { return false; };
		el.appendChild(els);
		el.ggSubElement = els;
		el.ggId="Dropdown Checkmark";
		el.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		el.ggVisible=true;
		el.className="ggskin ggskin_svg ";
		el.ggType='svg';
		hs ='';
		hs+='height : 22px;';
		hs+='left : 0px;';
		hs+='opacity : 0;';
		hs+='position : absolute;';
		hs+='top : 0px;';
		hs+='visibility : hidden;';
		hs+='width : 22px;';
		hs+='pointer-events:auto;';
		el.setAttribute('style',hs);
		el.style[domTransform + 'Origin']='50% 50%';
		me._dropdown_checkmark0.ggIsActive=function() {
			if ((this.parentNode) && (this.parentNode.ggIsActive)) {
				return this.parentNode.ggIsActive();
			}
			return false;
		}
		el.ggElementNodeId=function() {
			if ((this.parentNode) && (this.parentNode.ggElementNodeId)) {
				return this.parentNode.ggElementNodeId();
			}
			return player.getCurrentNode();
		}
		me._dropdown_checkmark0.logicBlock_alpha = function() {
			var newLogicStateAlpha;
			if (
				((player.nodeVisited(me._dropdown_checkmark0.ggElementNodeId()) == true)) || 
				((me._dropdown_checkmark0.ggIsActive() == true))
			)
			{
				newLogicStateAlpha = 0;
			}
			else {
				newLogicStateAlpha = -1;
			}
			if (me._dropdown_checkmark0.ggCurrentLogicStateAlpha != newLogicStateAlpha) {
				me._dropdown_checkmark0.ggCurrentLogicStateAlpha = newLogicStateAlpha;
				me._dropdown_checkmark0.style[domTransition]='opacity 0s';
				if (me._dropdown_checkmark0.ggCurrentLogicStateAlpha == 0) {
					me._dropdown_checkmark0.style.visibility=me._dropdown_checkmark0.ggVisible?'inherit':'hidden';
					me._dropdown_checkmark0.style.opacity=1;
				}
				else {
					me._dropdown_checkmark0.style.visibility="hidden";
					me._dropdown_checkmark0.style.opacity=0;
				}
			}
		}
		me._dropdown_checkmark0.ggUpdatePosition=function (useTransition) {
		}
		me.__div.appendChild(me._dropdown_checkmark0);
	};
	function SkinCloner_dropdown_cloner_Class(nodeId, parentScope,ggParent,parameter) {
		var me=this;
		var hs='';
		me.parentScope=parentScope;
		me.ggParent=ggParent;
		me.findElements=skin.findElements;
		me.ggIndex=parameter.index;
		me.ggNodeId=nodeId;
		me.ggTitle=parameter.title;
		me.ggUserdata=skin.player.getNodeUserdata(me.ggNodeId);
		me.elementMouseDown={};
		me.elementMouseOver={};
		me.__div=document.createElement('div');
		me.__div.setAttribute('style','position: absolute;width: 169px; height: 24px; visibility: inherit; overflow: visible;');
		me.__div.style.left=parameter.left;
		me.__div.style.top=parameter.top;
		me.__div.ggIsActive = function() {
			return player.getCurrentNode()==me.ggNodeId;
		}
		me.__div.ggElementNodeId=function() {
			return me.ggNodeId;
		}
		el=me._dropdown_menu_text=document.createElement('div');
		els=me._dropdown_menu_text__text=document.createElement('div');
		el.className='ggskin ggskin_textdiv';
		el.ggTextDiv=els;
		el.ggId="Dropdown Menu Text";
		el.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		el.ggVisible=true;
		el.className="ggskin ggskin_text ";
		el.ggType='text';
		hs ='';
		hs+='cursor : pointer;';
		hs+='height : 20px;';
		hs+='left : 15px;';
		hs+='position : absolute;';
		hs+='top : 3px;';
		hs+='visibility : inherit;';
		hs+='width : 150px;';
		hs+='pointer-events:auto;';
		el.setAttribute('style',hs);
		el.style[domTransform + 'Origin']='50% 50%';
		hs ='position:absolute;';
		hs += 'box-sizing: border-box;';
		hs+='left: 0px;';
		hs+='top:  0px;';
		hs+='width: 150px;';
		hs+='height: 20px;';
		hs+='background: #efefef;';
		hs+='background: rgba(239,239,239,0.784314);';
		hs+='border: 0px solid #848484;';
		hs+='color: rgba(0,0,0,1);';
		hs+='text-align: center;';
		hs+='white-space: nowrap;';
		hs+='padding: 2px 3px 2px 3px;';
		hs+='overflow: hidden;';
		els.setAttribute('style',hs);
		els.innerHTML=me.ggUserdata.title;
		el.appendChild(els);
		me._dropdown_menu_text.ggIsActive=function() {
			if ((this.parentNode) && (this.parentNode.ggIsActive)) {
				return this.parentNode.ggIsActive();
			}
			return false;
		}
		el.ggElementNodeId=function() {
			if ((this.parentNode) && (this.parentNode.ggElementNodeId)) {
				return this.parentNode.ggElementNodeId();
			}
			return player.getCurrentNode();
		}
		me._dropdown_menu_text.logicBlock_backgroundcolor = function() {
			var newLogicStateBackgroundColor;
			if (
				((me.elementMouseOver['dropdown_menu_text'] == true))
			)
			{
				newLogicStateBackgroundColor = 0;
			}
			else if (
				((me._dropdown_menu_text.ggIsActive() == true))
			)
			{
				newLogicStateBackgroundColor = 1;
			}
			else {
				newLogicStateBackgroundColor = -1;
			}
			if (me._dropdown_menu_text.ggCurrentLogicStateBackgroundColor != newLogicStateBackgroundColor) {
				me._dropdown_menu_text.ggCurrentLogicStateBackgroundColor = newLogicStateBackgroundColor;
				me._dropdown_menu_text__text.style[domTransition]='background-color 0s';
				if (me._dropdown_menu_text.ggCurrentLogicStateBackgroundColor == 0) {
					me._dropdown_menu_text__text.style.backgroundColor="rgba(255,255,255,1)";
				}
				else if (me._dropdown_menu_text.ggCurrentLogicStateBackgroundColor == 1) {
					me._dropdown_menu_text__text.style.backgroundColor="rgba(255,255,255,1)";
				}
				else {
					me._dropdown_menu_text__text.style.backgroundColor="rgba(239,239,239,0.784314)";
				}
			}
		}
		me._dropdown_menu_text.onclick=function (e) {
			if (
				(
					((me._dropdown_menu_text.ggIsActive() == false))
				)
			) {
				player.openNext("{"+me.ggNodeId+"}",player.hotspot.target);
			}
			skin._dropdown_menu_title_background1.onclick();
		}
		me._dropdown_menu_text.onmouseover=function (e) {
			me.elementMouseOver['dropdown_menu_text']=true;
			me._dropdown_menu_text.logicBlock_backgroundcolor();
		}
		me._dropdown_menu_text.onmouseout=function (e) {
			if (e && e.toElement) {
				var current = e.toElement;
				while (current = current.parentNode) {
				if (current == me._dropdown_menu_text__text)
					return;
				}
			}
			me.elementMouseOver['dropdown_menu_text']=false;
			me._dropdown_menu_text.logicBlock_backgroundcolor();
		}
		me._dropdown_menu_text.ontouchend=function (e) {
			me.elementMouseOver['dropdown_menu_text']=false;
			me._dropdown_menu_text.logicBlock_backgroundcolor();
		}
		me._dropdown_menu_text.ggUpdatePosition=function (useTransition) {
		}
		me.__div.appendChild(me._dropdown_menu_text);
		el=me._dropdown_checkmark=document.createElement('div');
		els=me._dropdown_checkmark__img=document.createElement('img');
		els.className='ggskin ggskin_svg';
		hs='data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0nMS4wJyBlbmNvZGluZz0ndXRmLTgnPz4KPCFET0NUWVBFIHN2ZyBQVUJMSUMgJy0vL1czQy8vRFREIFNWRyAxLjEvL0VOJyAnaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkJz4KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE2LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPgo8c3ZnIHhtbG5zOmdyYXBoPSJodHRwOi8vbnMuYWRvYmUuY29tL0dyYXBocy8xLjAvIiB4bWxuczphPSJodHRwOi8vbnMuYWRvYmUuY29tL0Fkb2JlU1ZHVmlld2VyRXh0ZW5zaW9ucy'+
			'8zLjAvIiB3aWR0aD0iMzJweCIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgeG1sbnM6aT0iaHR0cDovL25zLmFkb2JlLmNvbS9BZG9iZUlsbHVzdHJhdG9yLzEwLjAvIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeT0iMHB4IiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGhlaWdodD0iMzJweCIgeD0iMHB4IiB2ZXJzaW9uPSIxLjEiIHhtbG5zOng9Imh0dHA6Ly9ucy5hZG9iZS5jb20vRXh0ZW5zaWJpbGl0eS8xLjAvIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IC0zNzIyIC0yNjA2IDMyIDMyIiB2aWV3Qm94PSItMzcyMiAtMjYwNiAzMiAzMiI+CiA8'+
			'ZyBpZD0iTGF5ZXJfMSIvPgogPGcgaWQ9IkViZW5lXzEiLz4KIDxnIGlkPSJMYXllcl8yIj4KICA8Zz4KICAgPGc+CiAgICA8cGF0aCBkPSJNLTM2OTUuNDczLTI1OTguMTQ2Yy0wLjUxOS0wLjUxOS0xLjM2MS0wLjUxOS0xLjg3OSwwbC04Ljc4Nyw4Ljc4N2wtMi4yOTEtMi4yNDMmI3hhOyYjeDk7JiN4OTsmI3g5OyYjeDk7Yy0wLjUyNS0wLjUxMy0xLjM2Ni0wLjUwNC0xLjg4LDAuMDJjLTAuNTEzLDAuNTI1LTAuNTA0LDEuMzY3LDAuMDIxLDEuODhsMy4yMywzLjE2M2MwLjI1OSwwLjI1MywwLjU5NCwwLjM3OSwwLjkzLDAuMzc5JiN4YTsmI3g5OyYjeDk7JiN4OTsmI3g5O2MwLjM0LDAsMC42OC'+
			'0wLjEzLDAuOTQtMC4zOWw5LjcxNy05LjcxN0MtMzY5NC45NTQtMjU5Ni43ODUtMzY5NC45NTQtMjU5Ny42MjYtMzY5NS40NzMtMjU5OC4xNDZ6IiBmaWxsPSIjRkZGRkZGIi8+CiAgICA8cGF0aCBkPSJNLTM2OTkuOTYtMjU4My44MzdoLTEyLjMyNXYtMTIuMzI2aDExLjgyMWwyLjI1Mi0yLjI1MmMtMC4xNjYtMC4wODYtMC4zNTItMC4xNDEtMC41NTItMC4xNDFoLTE0LjcxOCYjeGE7JiN4OTsmI3g5OyYjeDk7JiN4OTtjLTAuNjYxLDAtMS4xOTYsMC41MzYtMS4xOTYsMS4xOTZ2MTQuNzE5YzAsMC42NiwwLjUzNSwxLjE5NiwxLjE5NiwxLjE5NmgxNC43MThjMC42NjEsMCwxLjE5Ny0wLjUzNiwx'+
			'LjE5Ny0xLjE5NnYtMTAuNDAzJiN4YTsmI3g5OyYjeDk7JiN4OTsmI3g5O2wtMi4zOTMsMi4zOTNWLTI1ODMuODM3eiIgZmlsbD0iI0ZGRkZGRiIvPgogICA8L2c+CiAgIDxnIGE6YWRvYmUtYmxlbmRpbmctbW9kZT0ibXVsdGlwbHkiIG9wYWNpdHk9IjAuNCI+CiAgICA8cGF0aCBzdHJva2Utd2lkdGg9IjEuNSIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBkPSImI3hhOyYjeDk7JiN4OTsmI3g5OyYjeDk7TS0zNjk1LjQ3My0yNTk4LjE0NmMtMC41MTktMC41MTktMS4zNjEtMC41MTktMS44NzksMGwtOC43ODcsOC43ODdsLTIuMjkxLTIuMjQzYy0wLjUyNS0wLjUxMy0xLjM2Ni0wLjUwNC0xLjg4LD'+
			'AuMDImI3hhOyYjeDk7JiN4OTsmI3g5OyYjeDk7Yy0wLjUxMywwLjUyNS0wLjUwNCwxLjM2NywwLjAyMSwxLjg4bDMuMjMsMy4xNjNjMC4yNTksMC4yNTMsMC41OTQsMC4zNzksMC45MywwLjM3OWMwLjM0LDAsMC42OC0wLjEzLDAuOTQtMC4zOWw5LjcxNy05LjcxNyYjeGE7JiN4OTsmI3g5OyYjeDk7JiN4OTtDLTM2OTQuOTU0LTI1OTYuNzg1LTM2OTQuOTU0LTI1OTcuNjI2LTM2OTUuNDczLTI1OTguMTQ2eiIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIgc3Ryb2tlPSIjMUExNzFCIiBhOmFkb2JlLWJsZW5kaW5nLW1vZGU9Im5vcm1hbCIgZmlsbD0ibm9uZSIvPgogICAgPHBhdGggc3Ryb2tlLXdp'+
			'ZHRoPSIxLjUiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgZD0iJiN4YTsmI3g5OyYjeDk7JiN4OTsmI3g5O00tMzY5OS45Ni0yNTgzLjgzN2gtMTIuMzI1di0xMi4zMjZoMTEuODIxbDIuMjUyLTIuMjUyYy0wLjE2Ni0wLjA4Ni0wLjM1Mi0wLjE0MS0wLjU1Mi0wLjE0MWgtMTQuNzE4JiN4YTsmI3g5OyYjeDk7JiN4OTsmI3g5O2MtMC42NjEsMC0xLjE5NiwwLjUzNi0xLjE5NiwxLjE5NnYxNC43MTljMCwwLjY2LDAuNTM1LDEuMTk2LDEuMTk2LDEuMTk2aDE0LjcxOGMwLjY2MSwwLDEuMTk3LTAuNTM2LDEuMTk3LTEuMTk2di0xMC40MDMmI3hhOyYjeDk7JiN4OTsmI3g5OyYjeDk7bC0yLjM5MywyLj'+
			'M5M1YtMjU4My44Mzd6IiBzdHJva2UtbGluZWpvaW49InJvdW5kIiBzdHJva2U9IiMxQTE3MUIiIGE6YWRvYmUtYmxlbmRpbmctbW9kZT0ibm9ybWFsIiBmaWxsPSJub25lIi8+CiAgIDwvZz4KICAgPGc+CiAgICA8cGF0aCBkPSJNLTM2OTUuNDczLTI1OTguMTQ2Yy0wLjUxOS0wLjUxOS0xLjM2MS0wLjUxOS0xLjg3OSwwbC04Ljc4Nyw4Ljc4N2wtMi4yOTEtMi4yNDMmI3hhOyYjeDk7JiN4OTsmI3g5OyYjeDk7Yy0wLjUyNS0wLjUxMy0xLjM2Ni0wLjUwNC0xLjg4LDAuMDJjLTAuNTEzLDAuNTI1LTAuNTA0LDEuMzY3LDAuMDIxLDEuODhsMy4yMywzLjE2M2MwLjI1OSwwLjI1MywwLjU5NCwwLjM3'+
			'OSwwLjkzLDAuMzc5JiN4YTsmI3g5OyYjeDk7JiN4OTsmI3g5O2MwLjM0LDAsMC42OC0wLjEzLDAuOTQtMC4zOWw5LjcxNy05LjcxN0MtMzY5NC45NTQtMjU5Ni43ODUtMzY5NC45NTQtMjU5Ny42MjYtMzY5NS40NzMtMjU5OC4xNDZ6IiBmaWxsPSIjRkZGRkZGIi8+CiAgICA8cGF0aCBkPSJNLTM2OTkuOTYtMjU4My44MzdoLTEyLjMyNXYtMTIuMzI2aDExLjgyMWwyLjI1Mi0yLjI1MmMtMC4xNjYtMC4wODYtMC4zNTItMC4xNDEtMC41NTItMC4xNDFoLTE0LjcxOCYjeGE7JiN4OTsmI3g5OyYjeDk7JiN4OTtjLTAuNjYxLDAtMS4xOTYsMC41MzYtMS4xOTYsMS4xOTZ2MTQuNzE5YzAsMC42NiwwLj'+
			'UzNSwxLjE5NiwxLjE5NiwxLjE5NmgxNC43MThjMC42NjEsMCwxLjE5Ny0wLjUzNiwxLjE5Ny0xLjE5NnYtMTAuNDAzJiN4YTsmI3g5OyYjeDk7JiN4OTsmI3g5O2wtMi4zOTMsMi4zOTNWLTI1ODMuODM3eiIgZmlsbD0iI0ZGRkZGRiIvPgogICA8L2c+CiAgIDxnPgogICAgPHBhdGggc3Ryb2tlLXdpZHRoPSIwLjIiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgZD0iTS0zNjk1LjQ3My0yNTk4LjE0NiYjeGE7JiN4OTsmI3g5OyYjeDk7JiN4OTtjLTAuNTE5LTAuNTE5LTEuMzYxLTAuNTE5LTEuODc5LDBsLTguNzg3LDguNzg3bC0yLjI5MS0yLjI0M2MtMC41MjUtMC41MTMtMS4zNjYtMC41MDQtMS44'+
			'OCwwLjAyJiN4YTsmI3g5OyYjeDk7JiN4OTsmI3g5O2MtMC41MTMsMC41MjUtMC41MDQsMS4zNjcsMC4wMjEsMS44OGwzLjIzLDMuMTYzYzAuMjU5LDAuMjUzLDAuNTk0LDAuMzc5LDAuOTMsMC4zNzljMC4zNCwwLDAuNjgtMC4xMywwLjk0LTAuMzlsOS43MTctOS43MTcmI3hhOyYjeDk7JiN4OTsmI3g5OyYjeDk7Qy0zNjk0Ljk1NC0yNTk2Ljc4NS0zNjk0Ljk1NC0yNTk3LjYyNi0zNjk1LjQ3My0yNTk4LjE0NnoiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIHN0cm9rZT0iIzFBMTcxQiIgZmlsbD0ibm9uZSIvPgogICAgPHBhdGggc3Ryb2tlLXdpZHRoPSIwLjIiIHN0cm9rZS1saW5lY2FwPSJyb3'+
			'VuZCIgZD0iTS0zNjk5Ljk2LTI1ODMuODM3JiN4YTsmI3g5OyYjeDk7JiN4OTsmI3g5O2gtMTIuMzI1di0xMi4zMjZoMTEuODIxbDIuMjUyLTIuMjUyYy0wLjE2Ni0wLjA4Ni0wLjM1Mi0wLjE0MS0wLjU1Mi0wLjE0MWgtMTQuNzE4Yy0wLjY2MSwwLTEuMTk2LDAuNTM2LTEuMTk2LDEuMTk2djE0LjcxOSYjeGE7JiN4OTsmI3g5OyYjeDk7JiN4OTtjMCwwLjY2LDAuNTM1LDEuMTk2LDEuMTk2LDEuMTk2aDE0LjcxOGMwLjY2MSwwLDEuMTk3LTAuNTM2LDEuMTk3LTEuMTk2di0xMC40MDNsLTIuMzkzLDIuMzkzVi0yNTgzLjgzN3oiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIHN0cm9rZT0iIzFBMTcx'+
			'QiIgZmlsbD0ibm9uZSIvPgogICA8L2c+CiAgPC9nPgogPC9nPgo8L3N2Zz4K';
		me._dropdown_checkmark__img.setAttribute('src',hs);
		els.setAttribute('style','position: absolute;top: 0px;left: 0px;width: 100%;height: 100%;-webkit-user-drag:none;pointer-events:none;;');
		els['ondragstart']=function() { return false; };
		el.appendChild(els);
		el.ggSubElement = els;
		el.ggId="Dropdown Checkmark";
		el.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		el.ggVisible=true;
		el.className="ggskin ggskin_svg ";
		el.ggType='svg';
		hs ='';
		hs+='height : 22px;';
		hs+='left : 0px;';
		hs+='opacity : 0;';
		hs+='position : absolute;';
		hs+='top : 0px;';
		hs+='visibility : hidden;';
		hs+='width : 22px;';
		hs+='pointer-events:auto;';
		el.setAttribute('style',hs);
		el.style[domTransform + 'Origin']='50% 50%';
		me._dropdown_checkmark.ggIsActive=function() {
			if ((this.parentNode) && (this.parentNode.ggIsActive)) {
				return this.parentNode.ggIsActive();
			}
			return false;
		}
		el.ggElementNodeId=function() {
			if ((this.parentNode) && (this.parentNode.ggElementNodeId)) {
				return this.parentNode.ggElementNodeId();
			}
			return player.getCurrentNode();
		}
		me._dropdown_checkmark.logicBlock_alpha = function() {
			var newLogicStateAlpha;
			if (
				((player.nodeVisited(me._dropdown_checkmark.ggElementNodeId()) == true)) || 
				((me._dropdown_checkmark.ggIsActive() == true))
			)
			{
				newLogicStateAlpha = 0;
			}
			else {
				newLogicStateAlpha = -1;
			}
			if (me._dropdown_checkmark.ggCurrentLogicStateAlpha != newLogicStateAlpha) {
				me._dropdown_checkmark.ggCurrentLogicStateAlpha = newLogicStateAlpha;
				me._dropdown_checkmark.style[domTransition]='opacity 0s';
				if (me._dropdown_checkmark.ggCurrentLogicStateAlpha == 0) {
					me._dropdown_checkmark.style.visibility=me._dropdown_checkmark.ggVisible?'inherit':'hidden';
					me._dropdown_checkmark.style.opacity=1;
				}
				else {
					me._dropdown_checkmark.style.visibility="hidden";
					me._dropdown_checkmark.style.opacity=0;
				}
			}
		}
		me._dropdown_checkmark.ggUpdatePosition=function (useTransition) {
		}
		me.__div.appendChild(me._dropdown_checkmark);
	};
	me.addSkin();
	var style = document.createElement('style');
	style.type = 'text/css';
	style.appendChild(document.createTextNode('.ggskin { font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px;}'));
	document.head.appendChild(style);
	player.addListener('mouseover', function(args) { me._dropdown_cloner1.callChildLogicBlocks_mouseover();me._dropdown_cloner0.callChildLogicBlocks_mouseover();me._dropdown_cloner.callChildLogicBlocks_mouseover(); });
	player.addListener('changenode', function(args) { me._dropdown_cloner1.callChildLogicBlocks_active();me._dropdown_cloner0.callChildLogicBlocks_active();me._dropdown_cloner.callChildLogicBlocks_active(); });
	player.addListener('changevisitednodes', function(args) { me._dropdown_cloner1.callChildLogicBlocks_changevisitednodes();me._dropdown_cloner0.callChildLogicBlocks_changevisitednodes();me._dropdown_cloner.callChildLogicBlocks_changevisitednodes(); });
	me.skinTimerEvent();
};