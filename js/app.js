var app = angular.module("myModule", [])
				.controller("myController", function($scope){
				$scope.carts=[];
				$scope.products = [
					{p_id: "1", p_name: "Roasted Crayfish", p_image: "images/1.jpg", p_price: 50},
					{p_id: "2", p_name: "Pasta With Baby Kale, Toasted Pumpkin Seeds, And Pesto", p_image: "images/2.jpg", p_price: 15},
					{p_id: "3", p_name: "Well-Done Steak With Multiple Vegetables", p_image: "images/013.jpg", p_price: 32},
					{p_id: "4", p_name: "Pan-Seared Strip Steak", p_image: "images/014.jpg", p_price: 28},
					{p_id: "5", p_name: "Roasted Shrimp Cocktail", p_image: "images/015.jpg", p_price: 35},
					{p_id: "6", p_name: "Roasted Shrimp And Broccoli", p_image: "images/016.jpg", p_price: 35},
					{p_id: "7", p_name: "Randy's Slow Cooker Ravioli Lasagna", p_image: "images/017.jpg", p_price: 25},
					{p_id: "8", p_name: "Crustacean-Inspired Garlic Roasted Crab", p_image: "images/018.jpg", p_price: 48}
					//{p_id: "9", p_name: "HTC U11", p_image: "images/9.jpg", p_price: 499},
					//{p_id: "10", p_name: "Google Pixel xl 2", p_image: "images/10.jpg", p_price: 849},



				];
				
				$scope.add_cart = function(product){
					if(product){
						$scope.carts.push({p_id: product.p_id, p_name: product.p_name, p_price: product.p_price});
					}	
				}
						
					
				$scope.total = 0;
				$scope.tax=0;
				
				$scope.setTotals = function(cart){
					if(cart){
						$scope.total += cart.p_price;

					}
				}

				

				$scope.setTax=function(cart){
					if(cart){
						$scope.tax *= cart.p_price*0.064;
					}
				}
				
				$scope.remove_cart = function(cart){
					if(cart){
						$scope.carts.splice($scope.carts.indexOf(cart), 1);
						$scope.total -= cart.p_price;
						$scope.tax -= cart.p_price*0.064;

					}
				}
	});