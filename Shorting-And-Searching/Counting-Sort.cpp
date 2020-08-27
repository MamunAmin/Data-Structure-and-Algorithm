#include <bits/stdc++.h>

using namespace std;

int main()
{
    int array_size;
    scanf("%d", &array_size);

    int ara[array_size];

    int cnt[101];
    memset(cnt, 0 , sizeof(cnt));

    //input array elements. array[i] <= 100
    for(int i = 0; i < array_size; i++)
    {
        scanf("%d", &ara[i]);
        cnt[ara[i]]++;
    }


    for(int i = 0; i <= 100; i++)
    {
        while(cnt[i] > 0)
        {
            printf("%d ", i);
            cnt[i]--;
        }
    }
    return 0;
}
