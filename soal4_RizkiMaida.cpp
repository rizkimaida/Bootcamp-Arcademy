#include<iostream>
using namespace std;
int cetak_gambar(int x){
	int mid = x/2+1;
	if(x % 2 != 0){
		for(int i=1;i<=x;i++){
		if(i==mid){
			for(int y=1;y<=x;y++){
				cout<<"*";
			}
		}
		else{
			cout<<"*";
			for(int y=1;y<=x-2;y++){
				cout<<"=";
			}
			cout<<"*";
		}
		cout<<endl;
		}
	}
	else{
		cout<<endl;
	}
}

int main(){
	int n;
	cin>>n;
	cetak_gambar(n);
	return 0;
}
