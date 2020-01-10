<?php

use App\Producto;

function setActive(string $routeName): string
{
	return request()->routeIs($routeName) ? 'active' : '';
}

function setSelected(string $category, string $productCategory): string
{
	return $category === $productCategory ? 'selected' : '';
}

function imgProfile($user): string
{
	if ($user)
	{
		if ($user->avatar)
		{
			return '/storage/avatar/' . $user->avatar;
		} else {
			return 'img/perfil.png';
		}
	} else {
		return 'img/perfil.png';
	}
}

function imgProduct(Producto $product): string
{
	return $product->imagen ? '/storage/productos/' . $product->imagen : '/img/products/producto.png';
}

function stock(int $stock): string
{
	if ($stock === 0)
	{
		return 'Sin stock';
	}
	if ($stock <= 10)
	{
		return 'Poco stock';
	}
	if ($stock > 10)
	{
		return 'Stock';
	}
}

function setStock(int $stock): string
{
	if ($stock === 0)
	{
		return 'sin-stock';
	}
	if ($stock <= 10)
	{
		return 'poco-stock';
	}
	if ($stock > 10)
	{
		return 'stock';
	}
}
