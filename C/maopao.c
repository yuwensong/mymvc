#include <stdio.h> 

//ð���㷨
/*
** �Ƚ����ڵ����������������ţ�С�ķ���ǰ 
*/ 
int main(){
	int i,j;
	int arr[10];
	int temp;
	
	//�����û������� 
	for(i=0; i<10; i++){
		scanf("%d", &arr[i]);
	}
	
	//�������
	for(i=0; i<10; i++){
		printf("%d ", arr[i]);
		if(i==4){
			printf("\n");
		}
	} 
	
	//����
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
	
	//�������
	for(i=0; i<10; i++){
		printf("%d ", arr[i]);
		if(i==4){
			printf("\n");
		}
	} 
	
	return 0;
	
}
