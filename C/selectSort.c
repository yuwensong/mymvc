#include <stdio.h>

//选择排序算法 
int main(){
	int iArr[10];
	int i, j, temp;
	int ipos;
	
	//循环输入10个数到iArr数组中
	for(i=0; i<10; i++){
		scanf("%d", &iArr[i]);
	} 
	
	printf("最初的10个数：\n");
	//输出这10个数
	for(i=0; i<10; i++){
		printf("%d ", iArr[i]);
	} 
	printf("\n");
	
	//进行选择排序
	for(i=0; i<9; i++){
		temp = iArr[i];
		ipos = i;
		for(j=i+1; j<10; j++){
			if(temp>iArr[j]){
				temp = iArr[j];	//获取到最小的值 
				ipos = j;
			}
		}
		iArr[ipos] = iArr[i];
		iArr[i] = temp;
	} 
	
	printf("选择排序法排序之后的数组：\n");
	//输出排序后的数组
	for(i=0; i<10; i++){
		printf("%d ", iArr[i]);
	} 
	printf("\n");
	return 0;
} 
