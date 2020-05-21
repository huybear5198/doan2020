app.controller('DoanController',function($scope,$http,API){
	$http.get(API + 'products').success(function(response){
		$scope.product = response;
	});
	$http.get(API + 'users').success(function(response){
		$scope.user = response;
	});
	$http.get(API + 'posts').success(function(response){
		$scope.posts = response;
	});
	$http.get(API + 'bills').success(function(response){
		$scope.bills = response;
	});
/*-------------Controller Product----------------*/
	$scope.modalProduct = function(state,id){
		if(state == "add-product"){
			$scope.frmTitle = "Thêm sản phẩm";
		}

		if(state == 'edit-product'){
			$scope.frmTitle = "Sửa sản phẩm";
		}
		$scope.state = state
		switch (state) {
			case "add-product":
				$scope.frmTitle = "Thêm sản phẩm";
				$scope.product_info = null;
				$scope.add_product = true;
				$scope.edit_product = false;
				break;
			case "edit-product":
				$scope.frmTitle = "Sửa sản phẩm";
				$scope.add_product = false;
				$scope.edit_product = true;
				$scope.id = id;
				$http.get(API + 'edit-product/' + id).success(function(response){
					$scope.product_info = response;
				});
				break;
			default:
				$scope.frmTitle = "Không có gì làm";
				break;
		}
		$("#myModal").modal("show");
	}

	$scope.saveProduct = function(state,id){
		if(state == "add-product"){
			//
		}

		if(state == "edit-product"){
			var url = API + "edit-product/" + id;
			var data = $.param($scope.product_info);
			$http({
				method : 'POST',
				url : url,
				data : data,
				headers :{'Content-Type' : 'application/x-www-form-urlencoded'}
			})
			.success(function(response){
				console.log(response);
				location.reload();
			})
			.error(function(response){
				console.log(response);
				alert('Rớt môn rồi ...');
			});
		}
	}
	$scope.confirmDeleteProduct = function(id){
			var isConfirmDelete = confirm('Bạn có chắc muốn xóa sản phẩm này không?');
			if (isConfirmDelete){
				$http.get(API + 'delete-product/' + id)
				.success(function(reponse){
					console.log(reponse);
				})
				.error(function(reponse){
					console.log(reponse);
					alert('Xóa không đc thì rớt môn...');
				});
			}
			else{
				return false;
			}
	}
/*-------------Controller User----------------*/
	$scope.modalUser = function(state,id){
		if(state == "add-user"){
			$scope.frmTitle = "Thêm User";
		}

		if(state == 'edit-user'){
			$scope.frmTitle = "Sửa User";
		}
		$scope.state = state
		switch (state) {
			case "add-user":
				$scope.frmTitle = "Thêm User";
				$scope.user_info = null;
				break;
			case "edit-user":
				$scope.frmTitle = "Sửa User";
				$scope.id = id;
				$http.get(API + 'edit-user/' + id).success(function(response){
					$scope.user_info = response;
				});
				break;
			default:
				$scope.frmTitle = "Không có gì làm";
				break;
		}
		$("#myModalUser").modal("show");
	}

	$scope.saveUser = function(state,id){
		if(state == "add-user"){
			var url = API + "add-user";
			var data = $.param($scope.user_info);
			$http({
				method : 'POST',
				url : url,
				data : data,
				headers :{'Content-Type' : 'application/x-www-form-urlencoded'}
			})
			.success(function(response){
				console.log(response);
				location.reload();
			})
			.error(function(response){
				console.log(response);
				alert('Rớt môn rồi ...');
			});
		}

		if(state == "edit-user"){
			var url = API + "edit-user/" + id;
			var data = $.param($scope.user_info);
			$http({
				method : 'POST',
				url : url,
				data : data,
				headers :{'Content-Type' : 'application/x-www-form-urlencoded'}
			})
			.success(function(response){
				console.log(response);
				location.reload();
			})
			.error(function(response){
				console.log(response);
				alert('Rớt môn rồi ...');
			});
		}
	}
	$scope.confirmDeleteUser = function(id){
		var isConfirmDelete = confirm('Bạn có chắc muốn xóa tài khoản này không?');
		if (isConfirmDelete){
			$http.get(API + 'delete-user/' + id)
			.success(function(reponse){
				console.log(reponse);
				location.reload();
			})
			.error(function(reponse){
				console.log(reponse);
				alert('Xóa không đc thì rớt môn...');
			});
		}
		else{
			return false;
		}
	}
/*-------------Controller Post----------------------------------------------------------------------*/
	$scope.modalPost = function(state,id){
		if(state == "add-post"){
			$scope.frmTitle = "Thêm Post";
		}

		if(state == 'edit-post'){
			$scope.frmTitle = "Sửa Post";
		}
		$scope.state = state
		switch (state) {
			case "add-post":
				$scope.frmTitle = "Thêm Post";
		    	$scope.post_info = null;
				$scope.add_post = true;
				$scope.edit_post = false;
				break;
			case "edit-post":
				$scope.frmTitle = "Sửa Post";
				$scope.add_post = false;
				$scope.edit_post = true;
				$scope.id = id;
				$http.get(API + 'edit-post/' + id).success(function(response){
					$scope.post_info = response;
				});
				break;
			default:
				$scope.frmTitle = "Không có gì làm";
				break;
		}

		$("#myModalPost").modal("show");
	}

	$scope.savePost = function(state,id){
		if(state == "add-post"){
			//
		}

		if(state == "edit-post"){
			var url = API + "edit-post/" + id;
			var data = $.param($scope.post_info);
			$http({
				method : 'POST',
				url : url,
				data : data,
				headers :{'Content-Type' : 'application/x-www-form-urlencoded'}
			})
			.success(function(response){
				console.log(response);
				location.reload();
			})
			.error(function(response){
				console.log(response);
				alert('Rớt môn rồi ...');
			});
		}
	}
	$scope.confirmDeletePost = function(id){
		var isConfirmDelete = confirm('Bạn có chắc muốn xóa post này không ?');
		if (isConfirmDelete){
			$http.get(API + 'delete-post/' + id)
			.success(function(reponse){
				console.log(reponse);
				location.reload();
			})
			.error(function(reponse){
				console.log(reponse);
				alert('Xóa không đc thì rớt môn...');
			});;
		}
		else{
			return false;
		}
	}
});

/*------------------------------------------------------------------------------------------------------*/