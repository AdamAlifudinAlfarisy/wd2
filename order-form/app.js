function hasClass(el, className)
{
    if (el.classList)
        return el.classList.contains(className);
    return !!el.className.match(new RegExp('(\\s|^)' + className + '(\\s|$)'));
}

function addClass(el, className)
{
    if (el.classList)
        el.classList.add(className)
    else if (!hasClass(el, className))
        el.className += " " + className;
}

function removeClass(el, className)
{
    if (el.classList)
        el.classList.remove(className)
    else if (hasClass(el, className))
    {
        var reg = new RegExp('(\\s|^)' + className + '(\\s|$)');
        el.className = el.className.replace(reg, ' ');
    }
}

function addTotal(product, total, isAdd){
	if (isAdd) {
		total += product.price;
	} else {
		total -= product.price;
	}
	return total;
}

var product = [
	{
	id : 1,
	name : 'Cappucino',
	price : 35000,
	active: true
	},
	{
	id : 2,
	name : 'Green Tea Latte',
	price : 40000,
	active: true
	},
	{
	id : 3,
	name : 'Fish and Chips',
	price : 50000,
	active: true
	},
	{
	id : 4,
	name : 'Tuna Sandwich',
	price : 45000,
	active: true
	},
	{
	id : 5,
	name : 'French Fries',
	price : 18000,
	active: true
	},
	{
	id : 6,
	name : 'Mineral Water',
	price : 8000,
	active: true
	}
]

var total = 0;
$app = document.querySelector('.app');

function currency(amount){
	return 'Rp ' + amount;
}

function renderTitle(container) {
	var $title = document.createElement('h1');
	$title.innerHTML = 'Pesanan';
	container.appendChild($title);
}

function renderList(container, product){
	var $orderlist = document.createElement('ul');

	// looping untuk memasukkan produk
	product.forEach(function (product){
		var $product = document.createElement('li');
		var $productPrice = document.createElement('span');

		$productPrice.innerHTML = currency(product.price);
		$product.innerHTML = product.name;

		$product.appendChild($productPrice);
		$orderlist.appendChild($product);

		$product.addEventListener('click', function(event){
			// var isAdd menentukan apakah operasi berikutnya ditambah atau dikurang
			var isAdd = !hasClass($product, 'is-active');

			if (isAdd) {
				addClass($product, 'is-active');
			} else {
				removeClass($product, 'is-active');
			}

			total = addTotal(product, total, isAdd);

			var $total = document.querySelector('.total span');
			$total.innerHTML = total;
		})
	})
	container.appendChild($orderlist);
}

function renderTotalContainer(container, total) {
	var $totalContainer = document.createElement('div');
	addClass($totalContainer,'total')
	$totalContainer.innerHTML = 'Total : '

	var $total = document.createElement('span');
	$total.innerHTML = currency(total);
	$totalContainer.appendChild($total);

	container.appendChild($totalContainer);
}

renderTitle($app)
renderList($app, product)
renderTotalContainer($app, total)