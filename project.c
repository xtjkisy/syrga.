#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include <time.h>

#define MAX_WORD_LENGTH 20

char *words[] = {
    "ant", "baboon", "badger", "bat", "bear", "beaver", "camel", "cat", "clam", "cobra",
    "cougar", "coyote", "crow", "deer", "dog", "donkey", "duck", "eagle", "ferret", "fox",
    "frog", "goat", "goose", "hawk", "lion", "lizard", "llama", "mole", "monkey", "moose",
    "mouse", "mule", "newt", "otter", "owl", "panda", "parrot", "pigeon", "python", "rabbit",
    "ram", "rat", "raven", "rhino", "salmon", "seal", "shark", "sheep", "skunk", "sloth",
    "snake", "spider", "stork", "swan", "tiger", "toad", "trout", "turkey", "turtle",
    "weasel", "whale", "wolf", "wombat", "zebra"
};

int numWords = sizeof(words) / sizeof(words[0]);

char *get_random_word(char *word_list[], int num_words) {
    int word_index = rand() % num_words;
    return word_list[word_index];
}

char *display_board(char *secret_word) {
    int length = strlen(secret_word);
    char *board = (char *)malloc((length + 1) * sizeof(char));

    for (int i = 0; i < length; i++) {
        board[i] = '_';
    }
    board[length] = '\0';

    return board;
}

void get_guess(char *secret_word) {
    int error_counter = 0;
    int word_length = strlen(secret_word);
    char guessed_letters[MAX_WORD_LENGTH] = {0};

    printf("Word: %s\n", display_board(secret_word));

    while (error_counter < 6) {
        char get_letter;
        printf("Guess a letter: ");
        scanf(" %c", &get_letter);

        if (strchr(guessed_letters, get_letter) != NULL) {
            printf("You already guessed that letter.\n");
            continue;
        }

        guessed_letters[strlen(guessed_letters)] = get_letter;

        if (strchr(secret_word, get_letter) != NULL) {
            printf("The letter exists in the word.\n");
        } else {
            error_counter++;
            printf("The letter does not exist in the word.\n");
        }

        printf("Word: %s\n", display_board(secret_word));

        if (strcmp(secret_word, display_board(secret_word)) == 0) {
            printf("Congratulations! You guessed the word: %s\n", secret_word);
            break;
        }
    }

    if (error_counter == 6) {
        printf("You have run out of attempts. The word was: %s\n", secret_word);
    }
}

int main() {
    srand(time(NULL));
    char *secret_word = get_random_word(words, numWords);
    get_guess(secret_word);

    return 0;
}
