<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      darkMode: 'class'
    }
  </script>

  <title>PupilleNetwork</title>
</head>
<body class="bg-[#EFF1F5] text-[#4c4f69] dark:bg-[#24273A] dark:text-[#cad3f5] transition-colors">
  
<header class="px-4 py-6 border-b border-[#4C4F69]/20 dark:border-[#CAD3F5]/20 max-w-[600px] mx-auto sticky top-0 bg-[#EFF1F5] dark:bg-[#24273A] z-10 transition-colors">
  <div class="flex items-center gap-6 justify-between" id="header-main">
    <a class="shrink-0" href="/">
      <svg class="block dark:hidden" width="134" height="28" viewBox="0 0 134 28" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M7.29 22.2314C6.44143 22.2314 5.74714 22.0386 5.20714 21.6529C4.66714 21.2517 4.24286 20.7426 3.93429 20.1254C3.64114 19.4929 3.43286 18.8371 3.30943 18.1583C3.186 17.464 3.12429 16.8237 3.12429 16.2374C3.12429 15.4043 3.17829 14.6251 3.28629 13.9C3.40971 13.1749 3.618 12.5346 3.91114 11.9791C4.20429 11.4237 4.62086 10.9917 5.16086 10.6831C5.71629 10.3591 6.426 10.1971 7.29 10.1971C8.21571 10.1971 9.05657 10.4594 9.81257 10.984C10.5686 11.5086 11.1703 12.226 11.6177 13.1363C12.0806 14.0466 12.312 15.0803 12.312 16.2374C12.312 17.3946 12.0806 18.4283 11.6177 19.3386C11.1549 20.2334 10.5377 20.9431 9.76629 21.4677C9.01029 21.9769 8.18486 22.2314 7.29 22.2314ZM6.82714 20.4726C7.53686 20.4726 8.16171 20.2951 8.70171 19.9403C9.25714 19.57 9.68914 19.0686 9.99771 18.436C10.3063 17.788 10.4606 17.0551 10.4606 16.2374C10.4606 15.0031 10.1443 13.9849 9.51171 13.1826C8.87914 12.3649 7.98429 11.956 6.82714 11.956C6.14829 11.956 5.54657 12.1411 5.022 12.5114C4.49743 12.8663 4.08857 13.3677 3.79543 14.0157C3.50229 14.6483 3.35571 15.3889 3.35571 16.2374C3.35571 17.0089 3.47914 17.7186 3.726 18.3666C3.98829 18.9991 4.374 19.5083 4.88314 19.894C5.39229 20.2797 6.04029 20.4726 6.82714 20.4726ZM1.50429 10.4286H3.28629L3.35571 12.8586V26.6286H1.50429V10.4286ZM24.4929 22H22.6415V10.4286H24.4929V22ZM22.7572 16.6077L22.7803 17.2557C22.7649 17.4409 22.7186 17.7263 22.6415 18.112C22.5798 18.4977 22.4641 18.9297 22.2943 19.408C22.1401 19.8709 21.9086 20.3183 21.6001 20.7503C21.3069 21.1823 20.9212 21.5371 20.4429 21.8149C19.9801 22.0926 19.4015 22.2314 18.7072 22.2314C18.2598 22.2314 17.7969 22.162 17.3186 22.0231C16.8558 21.8997 16.4238 21.6914 16.0226 21.3983C15.6215 21.0897 15.2975 20.6654 15.0506 20.1254C14.8038 19.5854 14.6803 18.9143 14.6803 18.112V10.4286H16.5318V17.6491C16.5318 18.3434 16.6398 18.8911 16.8558 19.2923C17.0872 19.678 17.3958 19.9557 17.7815 20.1254C18.1672 20.2951 18.5992 20.38 19.0775 20.38C19.8643 20.38 20.5201 20.1794 21.0446 19.7783C21.5692 19.3771 21.9703 18.8834 22.2481 18.2971C22.5258 17.7109 22.6955 17.1477 22.7572 16.6077ZM33.2805 22.2314C32.4319 22.2314 31.7377 22.0386 31.1977 21.6529C30.6577 21.2517 30.2334 20.7426 29.9248 20.1254C29.6317 19.4929 29.4234 18.8371 29.2999 18.1583C29.1765 17.464 29.1148 16.8237 29.1148 16.2374C29.1148 15.4043 29.1688 14.6251 29.2768 13.9C29.4002 13.1749 29.6085 12.5346 29.9017 11.9791C30.1948 11.4237 30.6114 10.9917 31.1514 10.6831C31.7068 10.3591 32.4165 10.1971 33.2805 10.1971C34.2062 10.1971 35.0471 10.4594 35.8031 10.984C36.5591 11.5086 37.1608 12.226 37.6082 13.1363C38.0711 14.0466 38.3025 15.0803 38.3025 16.2374C38.3025 17.3946 38.0711 18.4283 37.6082 19.3386C37.1454 20.2334 36.5282 20.9431 35.7568 21.4677C35.0008 21.9769 34.1754 22.2314 33.2805 22.2314ZM32.8177 20.4726C33.5274 20.4726 34.1522 20.2951 34.6922 19.9403C35.2477 19.57 35.6797 19.0686 35.9882 18.436C36.2968 17.788 36.4511 17.0551 36.4511 16.2374C36.4511 15.0031 36.1348 13.9849 35.5022 13.1826C34.8697 12.3649 33.9748 11.956 32.8177 11.956C32.1388 11.956 31.5371 12.1411 31.0125 12.5114C30.4879 12.8663 30.0791 13.3677 29.7859 14.0157C29.4928 14.6483 29.3462 15.3889 29.3462 16.2374C29.3462 17.0089 29.4697 17.7186 29.7165 18.3666C29.9788 18.9991 30.3645 19.5083 30.8737 19.894C31.3828 20.2797 32.0308 20.4726 32.8177 20.4726ZM27.4948 10.4286H29.2768L29.3462 12.8586V26.6286H27.4948V10.4286ZM42.962 5.8V8.04486H40.5551V5.8H42.962ZM40.8329 10.4286H42.6843V22H40.8329V10.4286ZM46.0778 5.8H47.9292V22H46.0778V5.8ZM51.4115 5.8H53.2629V22H51.4115V5.8ZM64.7063 18.274H66.4421C66.3186 19.03 66.0409 19.7089 65.6089 20.3106C65.1923 20.8969 64.6369 21.3674 63.9426 21.7223C63.2638 22.0617 62.4769 22.2314 61.5821 22.2314C60.5021 22.2314 59.5301 21.9769 58.6661 21.4677C57.8021 20.9431 57.1155 20.2334 56.6063 19.3386C56.1126 18.4283 55.8658 17.3946 55.8658 16.2374C55.8658 15.0803 56.1049 14.0466 56.5832 13.1363C57.0769 12.226 57.7481 11.5086 58.5966 10.984C59.4452 10.4594 60.4018 10.1971 61.4663 10.1971C62.5926 10.1971 63.5415 10.4517 64.3129 10.9609C65.0998 11.4546 65.6783 12.1874 66.0486 13.1594C66.4343 14.116 66.5886 15.2963 66.5115 16.7003H57.7172C57.7943 17.4563 58.0026 18.1197 58.3421 18.6906C58.6815 19.2614 59.1289 19.7089 59.6843 20.0329C60.2398 20.3414 60.8723 20.4957 61.5821 20.4957C62.3689 20.4957 63.0323 20.2951 63.5723 19.894C64.1278 19.4774 64.5058 18.9374 64.7063 18.274ZM61.5358 11.9329C60.5792 11.9329 59.7769 12.2106 59.1289 12.766C58.4809 13.3214 58.0489 14.0774 57.8329 15.034H64.6138C64.5521 14.0157 64.2203 13.2443 63.6186 12.7197C63.0323 12.1951 62.3381 11.9329 61.5358 11.9329Z" fill="#4C4F69"/>
        <path d="M72.1672 14.9334H73.9222V21.6429H72.1672V14.9334ZM77.0407 14.7849C77.4547 14.7849 77.8372 14.8389 78.1882 14.9469C78.5392 15.0549 78.8452 15.2214 79.1062 15.4464C79.3672 15.6714 79.5697 15.9594 79.7137 16.3104C79.8577 16.6524 79.9297 17.0619 79.9297 17.5389V21.6429H78.1747V17.8494C78.1747 17.2824 78.0352 16.8684 77.7562 16.6074C77.4862 16.3374 77.0407 16.2024 76.4197 16.2024C75.9517 16.2024 75.5287 16.2924 75.1507 16.4724C74.7727 16.6524 74.4667 16.8819 74.2327 17.1609C73.9987 17.4309 73.8637 17.7144 73.8277 18.0114L73.8142 17.3229C73.8592 17.0079 73.9627 16.7019 74.1247 16.4049C74.2867 16.1079 74.5027 15.8379 74.7727 15.5949C75.0517 15.3429 75.3802 15.1449 75.7582 15.0009C76.1362 14.8569 76.5637 14.7849 77.0407 14.7849ZM87.643 19.4154H89.344C89.272 19.8744 89.0785 20.2839 88.7635 20.6439C88.4575 21.0039 88.039 21.2874 87.508 21.4944C86.977 21.7014 86.329 21.8049 85.564 21.8049C84.709 21.8049 83.953 21.6699 83.296 21.3999C82.639 21.1209 82.126 20.7204 81.757 20.1984C81.388 19.6764 81.2035 19.0464 81.2035 18.3084C81.2035 17.5704 81.3835 16.9404 81.7435 16.4184C82.1035 15.8874 82.603 15.4824 83.242 15.2034C83.89 14.9244 84.646 14.7849 85.51 14.7849C86.392 14.7849 87.1255 14.9244 87.7105 15.2034C88.2955 15.4824 88.7275 15.9054 89.0065 16.4724C89.2945 17.0304 89.416 17.7459 89.371 18.6189H82.972C83.017 18.9609 83.143 19.2714 83.35 19.5504C83.566 19.8294 83.854 20.0499 84.214 20.2119C84.583 20.3739 85.0195 20.4549 85.5235 20.4549C86.0815 20.4549 86.545 20.3604 86.914 20.1714C87.292 19.9734 87.535 19.7214 87.643 19.4154ZM85.429 16.1214C84.781 16.1214 84.2545 16.2654 83.8495 16.5534C83.4445 16.8324 83.1835 17.1789 83.0665 17.5929H87.6295C87.5845 17.1429 87.3685 16.7874 86.9815 16.5264C86.6035 16.2564 86.086 16.1214 85.429 16.1214ZM90.1122 14.9334H95.3232V16.2969H90.1122V14.9334ZM91.8402 13.0974H93.5952V21.6429H91.8402V13.0974ZM105.186 20.4279L104.633 20.4144L106.82 14.9334H108.75L105.794 21.6429H104.147L101.987 16.2294H102.581L100.353 21.6429H98.7062L95.8307 14.9334H97.7612L99.8672 20.4279H99.3137L101.285 14.9334H103.296L105.186 20.4279ZM113.432 21.8049C112.586 21.8049 111.839 21.6699 111.191 21.3999C110.552 21.1299 110.053 20.7384 109.693 20.2254C109.333 19.7034 109.153 19.0644 109.153 18.3084C109.153 17.5524 109.333 16.9134 109.693 16.3914C110.053 15.8604 110.552 15.4599 111.191 15.1899C111.839 14.9199 112.586 14.7849 113.432 14.7849C114.278 14.7849 115.016 14.9199 115.646 15.1899C116.285 15.4599 116.785 15.8604 117.145 16.3914C117.505 16.9134 117.685 17.5524 117.685 18.3084C117.685 19.0644 117.505 19.7034 117.145 20.2254C116.785 20.7384 116.285 21.1299 115.646 21.3999C115.016 21.6699 114.278 21.8049 113.432 21.8049ZM113.432 20.4549C113.9 20.4549 114.319 20.3739 114.688 20.2119C115.066 20.0409 115.363 19.7979 115.579 19.4829C115.795 19.1589 115.903 18.7674 115.903 18.3084C115.903 17.8494 115.795 17.4579 115.579 17.1339C115.363 16.8009 115.07 16.5489 114.701 16.3779C114.332 16.2069 113.909 16.1214 113.432 16.1214C112.964 16.1214 112.541 16.2069 112.163 16.3779C111.785 16.5489 111.484 16.7964 111.259 17.1204C111.043 17.4444 110.935 17.8404 110.935 18.3084C110.935 18.7674 111.043 19.1589 111.259 19.4829C111.475 19.7979 111.772 20.0409 112.15 20.2119C112.528 20.3739 112.955 20.4549 113.432 20.4549ZM118.982 14.9334H120.737V21.6429H118.982V14.9334ZM123.316 16.3779C122.812 16.3779 122.375 16.4769 122.006 16.6749C121.637 16.8639 121.34 17.0979 121.115 17.3769C120.89 17.6559 120.733 17.9259 120.643 18.1869L120.629 17.4444C120.638 17.3364 120.674 17.1789 120.737 16.9719C120.8 16.7559 120.895 16.5264 121.021 16.2834C121.147 16.0314 121.313 15.7929 121.52 15.5679C121.727 15.3339 121.979 15.1449 122.276 15.0009C122.573 14.8569 122.92 14.7849 123.316 14.7849V16.3779ZM124.522 12.2334H126.277V21.6429H124.522V12.2334ZM131.934 14.9334L127.938 18.4569L127.978 17.3769L132.244 21.6429H130.017L126.318 17.8764L129.544 14.9334H131.934Z" fill="#8839EF"/>
      </svg>
  
      <svg class="hidden dark:block" width="134" height="28" viewBox="0 0 134 28" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M7.29 22.2314C6.44143 22.2314 5.74714 22.0386 5.20714 21.6529C4.66714 21.2517 4.24286 20.7426 3.93429 20.1254C3.64114 19.4929 3.43286 18.8371 3.30943 18.1583C3.186 17.464 3.12429 16.8237 3.12429 16.2374C3.12429 15.4043 3.17829 14.6251 3.28629 13.9C3.40971 13.1749 3.618 12.5346 3.91114 11.9791C4.20429 11.4237 4.62086 10.9917 5.16086 10.6831C5.71629 10.3591 6.426 10.1971 7.29 10.1971C8.21571 10.1971 9.05657 10.4594 9.81257 10.984C10.5686 11.5086 11.1703 12.226 11.6177 13.1363C12.0806 14.0466 12.312 15.0803 12.312 16.2374C12.312 17.3946 12.0806 18.4283 11.6177 19.3386C11.1549 20.2334 10.5377 20.9431 9.76629 21.4677C9.01029 21.9769 8.18486 22.2314 7.29 22.2314ZM6.82714 20.4726C7.53686 20.4726 8.16171 20.2951 8.70171 19.9403C9.25714 19.57 9.68914 19.0686 9.99771 18.436C10.3063 17.788 10.4606 17.0551 10.4606 16.2374C10.4606 15.0031 10.1443 13.9849 9.51171 13.1826C8.87914 12.3649 7.98429 11.956 6.82714 11.956C6.14829 11.956 5.54657 12.1411 5.022 12.5114C4.49743 12.8663 4.08857 13.3677 3.79543 14.0157C3.50229 14.6483 3.35571 15.3889 3.35571 16.2374C3.35571 17.0089 3.47914 17.7186 3.726 18.3666C3.98829 18.9991 4.374 19.5083 4.88314 19.894C5.39229 20.2797 6.04029 20.4726 6.82714 20.4726ZM1.50429 10.4286H3.28629L3.35571 12.8586V26.6286H1.50429V10.4286ZM24.4929 22H22.6415V10.4286H24.4929V22ZM22.7572 16.6077L22.7803 17.2557C22.7649 17.4409 22.7186 17.7263 22.6415 18.112C22.5798 18.4977 22.4641 18.9297 22.2943 19.408C22.1401 19.8709 21.9086 20.3183 21.6001 20.7503C21.3069 21.1823 20.9212 21.5371 20.4429 21.8149C19.9801 22.0926 19.4015 22.2314 18.7072 22.2314C18.2598 22.2314 17.7969 22.162 17.3186 22.0231C16.8558 21.8997 16.4238 21.6914 16.0226 21.3983C15.6215 21.0897 15.2975 20.6654 15.0506 20.1254C14.8038 19.5854 14.6803 18.9143 14.6803 18.112V10.4286H16.5318V17.6491C16.5318 18.3434 16.6398 18.8911 16.8558 19.2923C17.0872 19.678 17.3958 19.9557 17.7815 20.1254C18.1672 20.2951 18.5992 20.38 19.0775 20.38C19.8643 20.38 20.5201 20.1794 21.0446 19.7783C21.5692 19.3771 21.9703 18.8834 22.2481 18.2971C22.5258 17.7109 22.6955 17.1477 22.7572 16.6077ZM33.2805 22.2314C32.4319 22.2314 31.7377 22.0386 31.1977 21.6529C30.6577 21.2517 30.2334 20.7426 29.9248 20.1254C29.6317 19.4929 29.4234 18.8371 29.2999 18.1583C29.1765 17.464 29.1148 16.8237 29.1148 16.2374C29.1148 15.4043 29.1688 14.6251 29.2768 13.9C29.4002 13.1749 29.6085 12.5346 29.9017 11.9791C30.1948 11.4237 30.6114 10.9917 31.1514 10.6831C31.7068 10.3591 32.4165 10.1971 33.2805 10.1971C34.2062 10.1971 35.0471 10.4594 35.8031 10.984C36.5591 11.5086 37.1608 12.226 37.6082 13.1363C38.0711 14.0466 38.3025 15.0803 38.3025 16.2374C38.3025 17.3946 38.0711 18.4283 37.6082 19.3386C37.1454 20.2334 36.5282 20.9431 35.7568 21.4677C35.0008 21.9769 34.1754 22.2314 33.2805 22.2314ZM32.8177 20.4726C33.5274 20.4726 34.1522 20.2951 34.6922 19.9403C35.2477 19.57 35.6797 19.0686 35.9882 18.436C36.2968 17.788 36.4511 17.0551 36.4511 16.2374C36.4511 15.0031 36.1348 13.9849 35.5022 13.1826C34.8697 12.3649 33.9748 11.956 32.8177 11.956C32.1388 11.956 31.5371 12.1411 31.0125 12.5114C30.4879 12.8663 30.0791 13.3677 29.7859 14.0157C29.4928 14.6483 29.3462 15.3889 29.3462 16.2374C29.3462 17.0089 29.4697 17.7186 29.7165 18.3666C29.9788 18.9991 30.3645 19.5083 30.8737 19.894C31.3828 20.2797 32.0308 20.4726 32.8177 20.4726ZM27.4948 10.4286H29.2768L29.3462 12.8586V26.6286H27.4948V10.4286ZM42.962 5.8V8.04486H40.5551V5.8H42.962ZM40.8329 10.4286H42.6843V22H40.8329V10.4286ZM46.0778 5.8H47.9292V22H46.0778V5.8ZM51.4115 5.8H53.2629V22H51.4115V5.8ZM64.7063 18.274H66.4421C66.3186 19.03 66.0409 19.7089 65.6089 20.3106C65.1923 20.8969 64.6369 21.3674 63.9426 21.7223C63.2638 22.0617 62.4769 22.2314 61.5821 22.2314C60.5021 22.2314 59.5301 21.9769 58.6661 21.4677C57.8021 20.9431 57.1155 20.2334 56.6063 19.3386C56.1126 18.4283 55.8658 17.3946 55.8658 16.2374C55.8658 15.0803 56.1049 14.0466 56.5832 13.1363C57.0769 12.226 57.7481 11.5086 58.5966 10.984C59.4452 10.4594 60.4018 10.1971 61.4663 10.1971C62.5926 10.1971 63.5415 10.4517 64.3129 10.9609C65.0998 11.4546 65.6783 12.1874 66.0486 13.1594C66.4343 14.116 66.5886 15.2963 66.5115 16.7003H57.7172C57.7943 17.4563 58.0026 18.1197 58.3421 18.6906C58.6815 19.2614 59.1289 19.7089 59.6843 20.0329C60.2398 20.3414 60.8723 20.4957 61.5821 20.4957C62.3689 20.4957 63.0323 20.2951 63.5723 19.894C64.1278 19.4774 64.5058 18.9374 64.7063 18.274ZM61.5358 11.9329C60.5792 11.9329 59.7769 12.2106 59.1289 12.766C58.4809 13.3214 58.0489 14.0774 57.8329 15.034H64.6138C64.5521 14.0157 64.2203 13.2443 63.6186 12.7197C63.0323 12.1951 62.3381 11.9329 61.5358 11.9329Z" fill="#CAD3F5"/>
        <path d="M72.1672 14.9334H73.9222V21.6429H72.1672V14.9334ZM77.0407 14.7849C77.4547 14.7849 77.8372 14.8389 78.1882 14.9469C78.5392 15.0549 78.8452 15.2214 79.1062 15.4464C79.3672 15.6714 79.5697 15.9594 79.7137 16.3104C79.8577 16.6524 79.9297 17.0619 79.9297 17.5389V21.6429H78.1747V17.8494C78.1747 17.2824 78.0352 16.8684 77.7562 16.6074C77.4862 16.3374 77.0407 16.2024 76.4197 16.2024C75.9517 16.2024 75.5287 16.2924 75.1507 16.4724C74.7727 16.6524 74.4667 16.8819 74.2327 17.1609C73.9987 17.4309 73.8637 17.7144 73.8277 18.0114L73.8142 17.3229C73.8592 17.0079 73.9627 16.7019 74.1247 16.4049C74.2867 16.1079 74.5027 15.8379 74.7727 15.5949C75.0517 15.3429 75.3802 15.1449 75.7582 15.0009C76.1362 14.8569 76.5637 14.7849 77.0407 14.7849ZM87.643 19.4154H89.344C89.272 19.8744 89.0785 20.2839 88.7635 20.6439C88.4575 21.0039 88.039 21.2874 87.508 21.4944C86.977 21.7014 86.329 21.8049 85.564 21.8049C84.709 21.8049 83.953 21.6699 83.296 21.3999C82.639 21.1209 82.126 20.7204 81.757 20.1984C81.388 19.6764 81.2035 19.0464 81.2035 18.3084C81.2035 17.5704 81.3835 16.9404 81.7435 16.4184C82.1035 15.8874 82.603 15.4824 83.242 15.2034C83.89 14.9244 84.646 14.7849 85.51 14.7849C86.392 14.7849 87.1255 14.9244 87.7105 15.2034C88.2955 15.4824 88.7275 15.9054 89.0065 16.4724C89.2945 17.0304 89.416 17.7459 89.371 18.6189H82.972C83.017 18.9609 83.143 19.2714 83.35 19.5504C83.566 19.8294 83.854 20.0499 84.214 20.2119C84.583 20.3739 85.0195 20.4549 85.5235 20.4549C86.0815 20.4549 86.545 20.3604 86.914 20.1714C87.292 19.9734 87.535 19.7214 87.643 19.4154ZM85.429 16.1214C84.781 16.1214 84.2545 16.2654 83.8495 16.5534C83.4445 16.8324 83.1835 17.1789 83.0665 17.5929H87.6295C87.5845 17.1429 87.3685 16.7874 86.9815 16.5264C86.6035 16.2564 86.086 16.1214 85.429 16.1214ZM90.1122 14.9334H95.3232V16.2969H90.1122V14.9334ZM91.8402 13.0974H93.5952V21.6429H91.8402V13.0974ZM105.186 20.4279L104.633 20.4144L106.82 14.9334H108.75L105.794 21.6429H104.147L101.987 16.2294H102.581L100.353 21.6429H98.7062L95.8307 14.9334H97.7612L99.8672 20.4279H99.3137L101.285 14.9334H103.296L105.186 20.4279ZM113.432 21.8049C112.586 21.8049 111.839 21.6699 111.191 21.3999C110.552 21.1299 110.053 20.7384 109.693 20.2254C109.333 19.7034 109.153 19.0644 109.153 18.3084C109.153 17.5524 109.333 16.9134 109.693 16.3914C110.053 15.8604 110.552 15.4599 111.191 15.1899C111.839 14.9199 112.586 14.7849 113.432 14.7849C114.278 14.7849 115.016 14.9199 115.646 15.1899C116.285 15.4599 116.785 15.8604 117.145 16.3914C117.505 16.9134 117.685 17.5524 117.685 18.3084C117.685 19.0644 117.505 19.7034 117.145 20.2254C116.785 20.7384 116.285 21.1299 115.646 21.3999C115.016 21.6699 114.278 21.8049 113.432 21.8049ZM113.432 20.4549C113.9 20.4549 114.319 20.3739 114.688 20.2119C115.066 20.0409 115.363 19.7979 115.579 19.4829C115.795 19.1589 115.903 18.7674 115.903 18.3084C115.903 17.8494 115.795 17.4579 115.579 17.1339C115.363 16.8009 115.07 16.5489 114.701 16.3779C114.332 16.2069 113.909 16.1214 113.432 16.1214C112.964 16.1214 112.541 16.2069 112.163 16.3779C111.785 16.5489 111.484 16.7964 111.259 17.1204C111.043 17.4444 110.935 17.8404 110.935 18.3084C110.935 18.7674 111.043 19.1589 111.259 19.4829C111.475 19.7979 111.772 20.0409 112.15 20.2119C112.528 20.3739 112.955 20.4549 113.432 20.4549ZM118.982 14.9334H120.737V21.6429H118.982V14.9334ZM123.316 16.3779C122.812 16.3779 122.375 16.4769 122.006 16.6749C121.637 16.8639 121.34 17.0979 121.115 17.3769C120.89 17.6559 120.733 17.9259 120.643 18.1869L120.629 17.4444C120.638 17.3364 120.674 17.1789 120.737 16.9719C120.8 16.7559 120.895 16.5264 121.021 16.2834C121.147 16.0314 121.313 15.7929 121.52 15.5679C121.727 15.3339 121.979 15.1449 122.276 15.0009C122.573 14.8569 122.92 14.7849 123.316 14.7849V16.3779ZM124.522 12.2334H126.277V21.6429H124.522V12.2334ZM131.934 14.9334L127.938 18.4569L127.978 17.3769L132.244 21.6429H130.017L126.318 17.8764L129.544 14.9334H131.934Z" fill="#C6A0F6"/>
      </svg>
    </a>
  
    <div class="flex items-center gap-2">
      <button
        type="button"
        class="text-[#4C4F69] bg-[#E6E9EF] dark:bg-[#373A4D] dark:text-[#CAD3F5] rounded-full w-[40px] h-[40px] flex items-center justify-center p-2 dark:p-1.5"
        onclick="toggleTheme()"
      >
        <svg class="dark:block hidden" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M4.23381 13.5118L5.13108 14.4091L6.27654 13.27L5.3729 12.3664M9.61108 5.18182C7.50472 5.18182 5.7929 6.89364 5.7929 9C5.7929 11.1064 7.50472 12.8182 9.61108 12.8182C11.7174 12.8182 13.4293 11.1064 13.4293 9C13.4293 6.88727 11.7174 5.18182 9.61108 5.18182ZM14.702 9.63636H16.6111V8.36364H14.702M12.9456 13.27L14.0911 14.4091L14.9884 13.5118L13.8493 12.3664M14.9884 4.54545L14.0911 3.65455L12.9456 4.79364L13.8493 5.69727M10.2474 2H8.97472V3.90909H10.2474M6.27654 4.79364L5.13108 3.65455L4.23381 4.54545L5.3729 5.69727L6.27654 4.79364ZM2.61108 9.63636H4.52017V8.36364H2.61108M10.2474 14.0909H8.97472V16H10.2474" fill="currentColor"/>
        </svg>
  
        <svg class="dark:hidden block" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M3.67175 2.72667L5.35841 4.02001L4.75175 6.06L6.50508 4.85334L8.25841 6.06L7.65175 4.02001L9.33841 2.72667L7.21175 2.66667L6.50508 0.666672L5.79841 2.66667L3.67175 2.72667ZM1.33841 7.33334L2.43175 8.16667L2.03841 9.48667L3.17175 8.70667L4.30508 9.48667L3.91175 8.16667L5.00508 7.33334L3.63175 7.3L3.17175 6L2.71175 7.3L1.33841 7.33334ZM2.85841 10.6333C2.30508 10.58 1.71175 11.3667 2.06508 11.8667C2.27841 12.1667 2.50508 12.4467 2.78508 12.7133C5.39175 15.3333 9.61175 15.3333 12.2117 12.7133C14.8184 10.1133 14.8184 5.88667 12.2117 3.28667C11.9451 3.02 11.6651 2.78 11.3651 2.56667C10.8651 2.21334 10.0784 2.80667 10.1317 3.36C10.3117 5.26667 9.67175 7.24667 8.20508 8.70667C7.51201 9.40349 6.6729 9.93776 5.74829 10.2709C4.82369 10.6041 3.83666 10.7279 2.85841 10.6333ZM3.95175 11.98C5.90887 11.8675 7.75774 11.045 9.15175 9.66667C10.5984 8.20667 11.3717 6.33334 11.4784 4.45334C13.3517 6.54667 13.2784 9.76 11.2717 11.7733C9.25841 13.78 6.04508 13.8533 3.95175 11.98Z" fill="currentColor"/>
        </svg>
      </button>
      <button
        type="button"
        class="text-[#4C4F69] bg-[#E6E9EF] dark:bg-[#373A4D] dark:text-[#CAD3F5] rounded-full w-[40px] h-[40px] flex items-center justify-center p-3"
        onclick="toggleSearchMenu()"  
      >
        <svg viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M5.55162 0.5C6.79667 0.5 7.99072 0.994592 8.8711 1.87497C9.75148 2.75535 10.2461 3.9494 10.2461 5.19444C10.2461 6.35722 9.81996 7.42611 9.1194 8.24944L9.3144 8.44445H9.88496L13.4961 12.0556L12.4127 13.1389L8.80162 9.52778V8.95722L8.60662 8.76222C7.75467 9.48911 6.67153 9.88857 5.55162 9.88889C4.30658 9.88889 3.11253 9.3943 2.23215 8.51392C1.35177 7.63354 0.857178 6.43949 0.857178 5.19444C0.857178 3.9494 1.35177 2.75535 2.23215 1.87497C3.11253 0.994592 4.30658 0.5 5.55162 0.5ZM5.55162 1.94444C3.74607 1.94444 2.30162 3.38889 2.30162 5.19444C2.30162 7 3.74607 8.44445 5.55162 8.44445C7.35718 8.44445 8.80162 7 8.80162 5.19444C8.80162 3.38889 7.35718 1.94444 5.55162 1.94444Z" fill="currentColor"/>
        </svg>
      </button>
    </div>
  </div>

  <div class="flex items-center gap-2 justify-center hidden" id="header-search">
    <div class="relative w-full">
      <input onclick="openLiveSearch()" onblur="closeLiveSearch()" class="w-full rounded-full h-[40px] bg-transparent px-4 border-[#4C4F69]/20 dark:border-[#CAD3F5]/20 border outline-none" type="text" oninput="handleSearch(this.value)">
      <div id="live-search-container" class="absolute top-[calc(40px+12px)] inset-x-0 border z-10 bg-gray-50 rounded-lg p-2 hidden">
      </div>
    </div>

    <button
      type="button"
      class="shrink-0 text-[#4C4F69] bg-[#E6E9EF] dark:bg-[#373A4D] dark:text-[#CAD3F5] rounded-full w-[40px] h-[40px] flex items-center justify-center p-2"
      onclick="toggleSearchMenu()"  
    >
      <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M19 6.41L17.59 5L12 10.59L6.41 5L5 6.41L10.59 12L5 17.59L6.41 19L12 13.41L17.59 19L19 17.59L13.41 12L19 6.41Z" fill="currentColor" />
      </svg>
    </button>
  </div>
</header>

<script>
  const liveSearchContainer = document.getElementById('live-search-container');
  const handleSearch = async (value) => {
    if (value.trim() === "") {
      closeLiveSearch();
      return;
    }

    openLiveSearch();
    const results = await findResults(value);
    renderResults(results);
  }

  const openLiveSearch = () => {
    liveSearchContainer.classList.remove('hidden');
  }

  const closeLiveSearch = () => {
    setTimeout(() => {
      liveSearchContainer.classList.add('hidden');
    }, 100)
  }

  const findResults = async (query) => {
    const response = await fetch(`/?c=search&a=search&query=${query}`);
    return response.json();
  }

  const renderResults = (results) => {
    liveSearchContainer.innerHTML = "";
    const container = document.createElement('div');
    container.classList.add('flex', 'flex-col', 'gap-4');

    for (const user of results.users) {
      container.innerHTML += createUserTemplate(user);
    }
    for (const post of results.posts) {
      container.innerHTML += createPostTemplate(post);
    }
    for (const comment of results.comments) {
      container.innerHTML += createCommentTemplate(comment);
    }

    liveSearchContainer.appendChild(container);
  }

  const createPostTemplate = (post) => {
    return `
      <div onclick="scrollToPost(${post.id})" class="flex flex-col cursor-pointer hover:bg-gray-100 rounded-lg px-4 py-2">
        <h3><b class="font-bold">POST:</b> ${post.titre}</h3>
        <p>${post.contenu}</p>
        <p class="text-sm opacity-50">Posté par ${post.nom_utilisateur} le ${new Date(post.date_publication).toLocaleString("fr-FR")}</p>
      </div>
    `;
  };

  const createUserTemplate = (user) => {
    return `
      <div class="flex flex-col px-4 py-2">
        <h3><b class="font-bold">UTILISATEUR:</b> ${user.nom}</h3>
        <p class="text-sm opacity-50">Inscrit depuis le ${new Date(user.date_inscription).toLocaleString("fr-FR")}</p>
      </div>
    `;
  };

  const createCommentTemplate = (comment) => {
    return `
      <div onclick="scrollToComment(${comment.id})" class="flex flex-col cursor-pointer hover:bg-gray-100 rounded-lg px-4 py-2">
        <p><b class="font-bold">COMMENTAIRE:</b> ${comment.contenu}</p>
        <p class="text-sm opacity-50">Commenté le ${new Date(comment.date_commentaire).toLocaleString("fr-FR")} par ${comment.nom_utilisateur}</p>
      </div>
    `;
  };

  const scrollToPost = (id) => {
    const element = document.querySelector(`[data-post-id="${id}"]`);
    element.scrollIntoView({ behavior: 'smooth' });
    closeLiveSearch();
  }

  const scrollToComment = (id) => {
    const element = document.querySelector(`[data-comment-id="${id}"]`);
    element.scrollIntoView({ behavior: 'smooth' });
    closeLiveSearch();
  }
</script>

<!-- Script pour gérér l'affichage de la barre de navigation. -->
<script>
  const headerMain = document.getElementById('header-main');
  const headerSearch = document.getElementById('header-search');

  let isSearchMenuOpened = false;
  const toggleSearchMenu = () => {
    if (isSearchMenuOpened) {
      headerMain.classList.remove('hidden');
      headerSearch.classList.add('hidden');
    }
    else {
      headerMain.classList.add('hidden');
      headerSearch.classList.remove('hidden');
    }

    isSearchMenuOpened = !isSearchMenuOpened;
  };
</script>

<!-- Script pour gérer le bouton de switch dark/light mode. -->
<script>
  const switchTheme = (theme = localStorage.getItem('theme')) => {
    if (theme === 'dark') {
      document.documentElement.classList.add('dark');
      localStorage.setItem('theme', 'dark');
    }
    else {
      document.documentElement.classList.remove('dark');
      localStorage.setItem('theme', 'light');
    }
  };

  const toggleTheme = () => {
    const theme = localStorage.getItem('theme');
    switchTheme(theme === 'dark' ? 'light' : 'dark');
  };

  // Lors du chargement de la page, on assigne notre thème.
  switchTheme();
</script>