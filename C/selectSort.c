#include <stdio.h>

//ѡ�������㷨 
int main(){
	int iArr[10];
	int i, j, temp;
	int ipos;
	
	//ѭ������10������iArr������
	for(i=0; i<10; i++){
		scanf("%d", &iArr[i]);
	} 
	
	printf("�����10������\n");
	//�����10����
	for(i=0; i<10; i++){
		printf("%d ", iArr[i]);
	} 
	printf("\n");
	
	//����ѡ������
	for(i=0; i<9; i++){
		temp = iArr[i];
		ipos = i;
		for(j=i+1; j<10; j++){
			if(temp>iArr[j]){
				temp = iArr[j];	//��ȡ����С��ֵ 
				ipos = j;
			}
		}
		iArr[ipos] = iArr[i];
		iArr[i] = temp;
	} 
	
	printf("ѡ����������֮������飺\n");
	//�������������
	for(i=0; i<10; i++){
		printf("%d ", iArr[i]);
	} 
	printf("\n");
	return 0;
} 
