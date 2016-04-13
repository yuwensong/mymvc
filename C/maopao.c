#include <stdio.h> 

//冒泡算法
/*
** 比较相邻的两个数，大的往后放，小的放在前 
*/ 
int main(){
	int i,j;
	int arr[10];
	int temp;
	
	//接受用户的输入 
	for(i=0; i<10; i++){
		scanf("%d", &arr[i]);
	}
	
	//输出数组
	for(i=0; i<10; i++){
		printf("%d ", arr[i]);
		if(i==4){
			printf("\n");
		}
	} 
	
	//排序
	for(i=0; i<10; i++){
		for(j=0; j<9; j++){
			if(arr[j]>arr[j+1]){
				temp = arr[j];
				arr[j] = arr[j+1];
				arr[j+1] = temp;
			}
		}
	} 
	
	printf("\n");
	
	//输出数组
	for(i=0; i<10; i++){
		printf("%d ", arr[i]);
		if(i==4){
			printf("\n");
		}
	} 
	
	return 0;
	
}
