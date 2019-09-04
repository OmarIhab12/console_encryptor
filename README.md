// this is readme file to describe this Laravel web application

This application is designed to encode and decode strings.

// application description
  The application contain 3 types of encoding:
    1- Shift Algorithm:
      Encryption:
        -This Algorithm use character dictionary and shift every letters by 3 letter taking in consideration the upper and lower Case.
        -Characters out side the alphabets like (blank space, #, &, numbers etc.) remain the same.
            this satisfy the example of encoding "Hello World" to become "Kroog Zruog" after encoding.
      Decryption:
        -This Algorithm reverse the effect of the encryption process by shifting the letter by 3 letters backward taking in consideration the upper and lower Case.
        -The characters outside the alphabets are also stay as they are without changing.

    2- Matrix Algorithm:
      Encryption:
        -All characters from (blank space till "z") can be used in this Algorithm.
        -We have 95 characters that we can use in this Algorithm every one has unique ascii.
        -The smallest one has ascii of 32 which is the blank space and the largest ascii code is 127 and belongs to "z".
        -For every 16 character they are taken into group and is multiplied by 16*16 matrix.
        -If the group didn't contain enough characters to complete the last group into 16 a space will be added instead which means that        encryption of "a" will be the same of "a ".
        -If there is blank space at the start or the end of the string it will be terminated as the objective is just decode the actual string.
        -We have 94 character to represent the character after encrypting, every character will be encrypted into 2 of those 94 characters, the first character represent it's result after multiplying by the matrix divided by 94 then 33 is added so that the result fall in the ascii numbers that this 94 character represent. The second character represent the reminder of the division by 94 and also 33 is added so the it lies in the wanted ascii.   
      Decryption:
        -The string of the decryption shouldn't contain blank space as it was excluded from the encoding characters that can be used.
        -It reverse the effect of the encoding process.
        -As the encoding add blank space to complete the 16 needed character and the every character is represented by 2 character so the input string should always be multiply of 32 otherwise this isn't encrypted in a write way and can't be decrypted, Exception will be send in this case.

    3- Reverse Algorithm:
      Encryption:
        -This Encryption Algorithm is called from External api.
      Encryption:
        -This Decryption Algorithm is called from External api.

// how to use the application ?
    The application need Php and Laravel to be installed so that it can run.

    You can run the encryption algorithms by commands through cmd in the root folder of the application, Here is the commands.
      1- php encryptor shiftEncrypt {string} ..... used to shift encrypt the string.
      2- php encryptor shiftDecrypt {string} ..... used to shift decrypt the string.
      3- php encryptor matrixEncrypt {string} ..... used to matrix encrypt the string.
      4- php encryptor matrixDecrypt {string} ..... used to matrix decrypt the string.
      5- php encryptor reverseEncrypt {string} ..... used to reverse encrypt the string.
      6- php encryptor reverseDecrypt {string} ..... used to reverse decrypt the string.

    another way is open through {string} php encryptor CommandLineTool {string} {type} {method} .... the type represent the type of encryption and if the input isn't known shift encryption will be used, the method represent either encrypt or decrypt and if its't not known encrypt will be used.
